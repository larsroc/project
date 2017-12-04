// Gemaakt door: Lars Kamman LCTAOO6A

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class TicTacToe implements ActionListener	{
	final String VERSION = "";
//Instellingen van alle variablen 
	JFrame window = new JFrame("Tic-Tac-Toe " + VERSION); //geeft de tittel van de frame aan + versie nummer
	
	JMenuBar MenuHoofdMenu = new JMenuBar();
	JMenuItem 	MenuNieuweGame = new JMenuItem("Nieuwe Game"),	//knoppen op het homescherm
					MenuInstructies = new JMenuItem("Instructies"),
					MenuStoppen = new JMenuItem("Stoppen"), 
					MenuOver = new JMenuItem("Over:");
	
	JButton 	Knop1v1 = new JButton("Speler VS Speler"), //(btn) staat voor button/ knop
				Knop1VSCPU = new JButton("Speler VS Computer"),
				KnopStoppen = new JButton("Stoppen"),
				KnopSpelerName = new JButton("Speler(s) Naam Invoeren"),
				KnopDoorgaan = new JButton("Doorgaan..."),
				KnopOpnieuwProberen = new JButton("Opnieuw Proberen?");
	JButton[] KnopLeeg = new JButton[10];
	
	JPanel 	PaneelNieuweGame = new JPanel(),//Panlen aanmaken
				PaneelMenu = new JPanel(),
				PaneelHoofdMenu = new JPanel(),
				PaneelBoven = new JPanel(),
				PaneelBeneden = new JPanel(),
				PaneelStoppenOpnieuwBeginnen = new JPanel(),
				PaneelPlayingField = new JPanel();
				
	JLabel 	LabelTitel = new JLabel("Tic-Tac-Toe"), 
				LabelBeurt = new JLabel(),
				LabelStatus = new JLabel("", JLabel.CENTER),
				LabelMode = new JLabel("", JLabel.LEFT);
	JTextArea TexstBericht = new JTextArea();
	
	final int[][] WinCombinatie = new int[][]	{// de combienaties om te winnen
		{1, 2, 3}, 			{1, 4, 7}, 		{1, 5, 9},
		{4, 5, 6}, 			{2, 5, 8}, 		{3, 5, 7},
		{7, 8, 9}, 			{3, 6, 9}
/*Horizontaal Wins*/	/*Verticaal Wins*/ /*Diogonaal Wins*/
	};
	final int X = 535, Y = 342,
		HoofdMenuKleurR = 255, HoofdMenukleurG = 255, HoofdMenuB = 255,// wit //(R= RED (rood) G= GROEN(groen) B= BLEU(blauw))
		KnopKleurR = 255, KnopKleurG = 255, KnopKleurB = 255;// wit //(R= RED (rood) G= GROEN(groen) B= BLEU(blauw))
	Color KleurKnopWin = new Color(190, 190, 190);
	int 	Beurt = 1,
			Speler1Gewonnen = 0, Speler2Gewonnen = 0,
			WinNummer1 = 1, WinNummer2 = 1, WinNummer3 = 1,
			Opties;
	boolean 	InSpel = false,
				CPUSpel = false,
				win = false;
	String 	Bericht,
				Speler1 = "Speler 1", Speler2 = "Speler 2",
				tempSpeler2 = "Speler 2";
	

	public TicTacToe()	{	//Setting game eigenschappen, inrichting en sytle...
	//Instellingen window eigenschappen:
		window.setSize(600, 600);//grote frame
		window.setLocation(350, 260);//locatie frame 
		//window.setResizable(false);
		window.setLayout(new BorderLayout());//grens
		window.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);//voor sluiten vrame
		
	//Instellingen Menu, HooftMenu, Boven, Beneden Paneel Inrichting/AchterGrond
		PaneelMenu.setLayout(new FlowLayout(FlowLayout.CENTER));//waar de layout zig plaats vind
		PaneelBoven.setLayout(new FlowLayout(FlowLayout.CENTER));//waar de layout zig plaats vind
		PaneelBeneden.setLayout(new FlowLayout(FlowLayout.CENTER));//waar de layout zig plaats vind
		
		PaneelNieuweGame.setBackground(new Color(HoofdMenuKleurR - 50, HoofdMenukleurG - 50, HoofdMenuB- 50));
		PaneelMenu.setBackground(new Color((HoofdMenuKleurR - 50), (HoofdMenukleurG - 50), (HoofdMenuB- 50)));
		PaneelHoofdMenu.setBackground(new Color(HoofdMenuKleurR, HoofdMenukleurG, HoofdMenuB));//(R= RED (rood) G= GROEN(groen) B= BLEU(blauw))
		PaneelBoven.setBackground(new Color(HoofdMenuKleurR, HoofdMenukleurG, HoofdMenuB));//(R= RED (rood) G= GROEN(groen) B= BLEU(blauw))
		PaneelBeneden.setBackground(new Color(HoofdMenuKleurR, HoofdMenukleurG, HoofdMenuB));//(R= RED (rood) G= GROEN(groen) B= BLEU(blauw))
		
	//Instellingen van Paneel PaneelStoppenOpnieuwBeginnen
		PaneelStoppenOpnieuwBeginnen.setLayout(new GridLayout(1, 2, 2, 2));
		PaneelStoppenOpnieuwBeginnen.add(KnopOpnieuwProberen);
		PaneelStoppenOpnieuwBeginnen.add(KnopStoppen);
		
	//Toevoegen van menu items naar menu bar
		MenuHoofdMenu.add(MenuNieuweGame);
		MenuHoofdMenu.add(MenuInstructies);
		MenuHoofdMenu.add(MenuOver);
		MenuHoofdMenu.add(MenuStoppen);
		
	//Toevoegen van Knopen naar PaneelNieuwGame
		PaneelNieuweGame.setLayout(new GridLayout(4, 1, 2, 10));
		PaneelNieuweGame.add(KnopDoorgaan);
		PaneelNieuweGame.add(Knop1v1);
		PaneelNieuweGame.add(Knop1VSCPU);
		PaneelNieuweGame.add(KnopSpelerName);
	
	//Toevoegen van Knop Eigenschappen
		KnopOpnieuwProberen.setEnabled(false);
		KnopDoorgaan.setEnabled(false);
	
	//Toevoegen van TexstBericht Eigenschappen
		TexstBericht.setBackground(new Color(HoofdMenuKleurR-30, HoofdMenukleurG-30, HoofdMenuB-30));
		TexstBericht.setForeground(Color.white);
		TexstBericht.setEditable(false);
		
	//Toevoegen van Action Listener naar alle Knopen en Menu Items
		MenuNieuweGame.addActionListener(this);
		MenuStoppen.addActionListener(this);
		MenuInstructies.addActionListener(this);
		MenuOver.addActionListener(this);
		Knop1v1.addActionListener(this);
		Knop1VSCPU.addActionListener(this);
		KnopStoppen.addActionListener(this);
		KnopSpelerName.addActionListener(this);
		KnopDoorgaan.addActionListener(this);
		KnopOpnieuwProberen.addActionListener(this);
	
	//Instellingen van Paneel playing field
		PaneelPlayingField.setLayout(new GridLayout(3, 3, 2, 2));
		PaneelPlayingField.setBackground(Color.LIGHT_GRAY);//achtergrond kleur
		for(int i=1; i<=9; i++)	{
			KnopLeeg[i] = new JButton();
			KnopLeeg[i].setBackground(new Color(KnopKleurR, KnopKleurG, KnopKleurB));
			KnopLeeg[i].addActionListener(this);
			PaneelPlayingField.add(KnopLeeg[i]);
                        KnopLeeg[i].setFont (new Font ("Arial", Font.BOLD, 200));// de X en O grote
		}

	//Toevoegen van alles wat nodig is voor PaneelMenu and PaneelHooftMenu
		LabelMode.setForeground(Color.white);
		PaneelMenu.add(LabelMode);
		PaneelMenu.add(MenuHoofdMenu);
		PaneelHoofdMenu.add(LabelTitel);
		
	//Toevoegen van window en de  window zichtbaar maken
		window.add(PaneelMenu, BorderLayout.NORTH);
		window.add(PaneelHoofdMenu, BorderLayout.CENTER);
		window.setVisible(true);
	}
	
	public static void main(String[] args)	{
		new TicTacToe();//	Oproepen van de class construtor.
							
	}




	public void showGame()	{	//	 Playing Field latenzien
										
		clearPanelSouth();
		PaneelHoofdMenu.setLayout(new BorderLayout());
		PaneelBoven.setLayout(new BorderLayout());
		PaneelBeneden.setLayout(new BorderLayout());
		PaneelBoven.add(PaneelPlayingField);
		PaneelBeneden.add(LabelBeurt, BorderLayout.WEST);
		PaneelBeneden.add(LabelStatus, BorderLayout.CENTER);
		PaneelBeneden.add(PaneelStoppenOpnieuwBeginnen, BorderLayout.EAST);
		PaneelHoofdMenu.add(PaneelBoven, BorderLayout.CENTER);
		PaneelHoofdMenu.add(PaneelBeneden, BorderLayout.SOUTH);
		PaneelPlayingField.requestFocus();
		InSpel = true;
		checkTurn();
		checkWinStatus();
	}
	
	public void newGame()	{	//	Stelt alle spel vereiste variabelen op standaard
											//	en toont dan de laying field.
											//	(Start een nieuw  1v1 Spel)
		KnopLeeg[WinNummer1].setBackground(new Color(KnopKleurR, KnopKleurG, KnopKleurB));
		KnopLeeg[WinNummer2].setBackground(new Color(KnopKleurR, KnopKleurG, KnopKleurB));
		KnopLeeg[WinNummer3].setBackground(new Color(KnopKleurR, KnopKleurG, KnopKleurB));
		for(int i=1; i<10; i++)	{
			KnopLeeg[i].setText("");
			KnopLeeg[i].setEnabled(true);
		}
		Beurt = 1;
		win = false;
		showGame();
	}

	public void quit()	{
		InSpel = false;
		LabelMode.setText("");
		KnopDoorgaan.setEnabled(false);
		clearPanelSouth();
		setDefaultLayout();
		PaneelBoven.add(PaneelNieuweGame);
		PaneelHoofdMenu.add(PaneelBoven);
	}

	public void checkWin()	{		
	//controleert of er 3 symbolen op een rij verticaal, schuin of horizontaal.
        //Dan laat het een bericht zien en schakelt de koppen uit. Als de game afgelopen is vraagt het of je opnieuw wil spellen.
										
		for(int i=0; i<8; i++)	{
			if(
				!KnopLeeg[WinCombinatie[i][0]].getText().equals("") &&
				KnopLeeg[WinCombinatie[i][0]].getText().equals(KnopLeeg[WinCombinatie[i][1]].getText()) &&
				KnopLeeg[WinCombinatie[i][1]].getText().equals(KnopLeeg[WinCombinatie[i][2]].getText()))	{
				/*
					De manier waarop hij stact of je gewonnen hebt:
					1: checks eerst of Knopleeg[x] niet gelijk naar een lege string-	x is de serie nummer 
					 in de meerdere-dementional reeks winCombinatie [checkt in elk van de 7 sets] [Het Eerste nummer]
                                        2: het controleert als KnopLeeg [x] is gelijk aan KnopLeeg [y] is - waarbij x winCombo [elke set] [het eerste nummer]
                                        waarbij y winCombo [elke set hetzelfde is als x] [het tweede getal] (dus eigenlijk controleert of de eerste en het
                                        tweede getal in elke set gelijk is aan elkaar)
                                        3: het controleert als KnopLeeg [y] is gelijk om KnopLeeg [z] - y is hetzelfde als de vorige keer y en z wezen
                                        winCombinatie [elke set als y] [het derde nummer]
                                        Samengevat: Het controleert wanneer KnopLeeg is gelijk aan elke set van nummers
				*/
				win = true;
				WinNummer1 = WinCombinatie[i][0];
				WinNummer2 = WinCombinatie[i][1];
				WinNummer3 = WinCombinatie[i][2];
				KnopLeeg[WinNummer1].setBackground(KleurKnopWin);
				KnopLeeg[WinNummer2].setBackground(KleurKnopWin);
				KnopLeeg[WinNummer3].setBackground(KleurKnopWin);
				break;
			}
		}
		if(win || (!win && Beurt>9))	{ // geeft aan of je gewonnen of gelijk hebt gespeeld
			if(win)	{
				if(KnopLeeg[WinNummer1].getText().equals("X"))	{
					Bericht = Speler1 + " Heeft Gewonnen";
					Speler1Gewonnen++;
				}
				else	{
					Bericht = Speler2 + " Heeft Gewonnen";
					Speler2Gewonnen++;
				}
		}	else if(!win && Beurt>9)
				Bericht = "Beide Speler hebben het geprobeerd!\nVolgende keer meer geluk.";
			showMessage(Bericht);
			for(int i=1; i<=9; i++)	{//tusen de 1 en 9 keer kijk en of je gewonnen hebts
				KnopLeeg[i].setEnabled(false);
			}
			KnopOpnieuwProberen.setEnabled(true);
			checkWinStatus();
		} else
			checkTurn();
	}

	public void AI()	{ // kuntmatige intiligentie als je tegen computer speeld
		int computerButton;
		if(Beurt <= 9)	{
			Beurt++;
			computerButton = CPU.doMove(KnopLeeg[1], KnopLeeg[2], KnopLeeg[3],
				KnopLeeg[4], KnopLeeg[5], KnopLeeg[6],
				KnopLeeg[7], KnopLeeg[8], KnopLeeg[9]);
			if(computerButton == 0)
				Random();
			else {
				KnopLeeg[computerButton].setText("O");
				KnopLeeg[computerButton].setEnabled(false);
			}
			checkWin();
		}
	}
	
	public void Random()	{// kan een random set doen
		int random;
		if(Beurt <= 9)	{
			random = 0;
			while(random == 0)	{
				random = (int)(Math.random() * 10);
			}
			if(CPU.doRandomMove(KnopLeeg[random]))	{
				KnopLeeg[random].setText("O");
				KnopLeeg[random].setEnabled(false);
			} else {
				Random();
			}
		}
	}
	
	public void checkTurn()	{// kijk wiens beurt het id
		String whoTurn;
		if(!(Beurt % 2 == 0))	{
			whoTurn = Speler1 + " [X]";
		}	else	{
			whoTurn = Speler2 + " [O]";
		}
		LabelBeurt.setText("Turn: " + whoTurn);
	}

	public void askUserForPlayerNames()	{ // vraag om je naam in te voeren als de 2 namen over een komen vraagt hij of je wil doorgaan
		String temp;
		boolean tempIsValid = false;
		temp = getInput("Voer Speler 1 naam in:", Speler1);
		if(temp == null)	{/*Doe Niets*/}
		else if(temp.equals(""))
			showMessage("Ongeldige Name!");// de naam mag niet als er niet iets ingevoerd word als je toch door gaat word je automaties speler 1/2
		else if(temp.equals(Speler2))	{
			Opties = askMessage("Speler 1's Naam komt overeen met die van Player 2\nWil je doorgaan?", "Naam komt overeen", JOptionPane.YES_NO_OPTION);// of je zeker weet
			if(Opties == JOptionPane.YES_OPTION)                                                                                                       // of je door wil gaan
				tempIsValid = true;
		} else if(temp != null)	{
			tempIsValid = true;
		}
		if(tempIsValid)	{
			Speler1 = temp;
			tempIsValid = false;
		}
		
		temp = getInput("Voer Speler 2 naam in:", Speler2);
		if(temp == null)	{/*Doe Niets*/}
		else if(temp.equals(""))
			showMessage("Invalid Name!");// de naam mag niet als er niet iets ingevoerd word als je toch door gaat word je automaties speler 1/2
		else if(temp.equals(Speler1))	{
			Opties = askMessage("Speler 2's Naam komt overeen met die van Player 2\nWil je doorgaan?", "Naam komt overeen", JOptionPane.YES_NO_OPTION);
			if(Opties == JOptionPane.YES_OPTION)
				tempIsValid = true;
		} else if(temp != null)	{
			tempIsValid = true;
		}
		if(tempIsValid)	{
			Speler2 = temp;
			tempSpeler2 = temp;
			tempIsValid = false;
		}
	}
	
	public void setDefaultLayout()	{ // het neer zetten van DefaultLayout
		PaneelHoofdMenu.setLayout(new GridLayout(2, 1, 2, 5));
		PaneelBoven.setLayout(new FlowLayout(FlowLayout.CENTER));
		PaneelBeneden.setLayout(new FlowLayout(FlowLayout.CENTER));
	}
	
	public void checkWinStatus()	{// sheck spelers win status
		LabelStatus.setText(Speler1 + ": " + Speler1Gewonnen + " | " + Speler2 + ": " + Speler2Gewonnen);	
	}

	public int askMessage(String msg, String tle, int op)	{
		return JOptionPane.showConfirmDialog(null, msg, tle, op);
	}

	public String getInput(String msg, String setText)	{
		return JOptionPane.showInputDialog(null, msg, setText);
	}

	public void showMessage(String msg)	{
		JOptionPane.showMessageDialog(null, msg);
	}
	
	public void clearPanelSouth()	{	//Verwijderd alle mogelijke panelen 
												//Alles wat PaneelHoofdMenu, PaneelBoven, Paneelbeneden
												//Kan Hebben.
		PaneelHoofdMenu.remove(LabelTitel);
		PaneelHoofdMenu.remove(PaneelBoven);
		PaneelHoofdMenu.remove(PaneelBeneden);
		PaneelBoven.remove(PaneelNieuweGame);
		PaneelBoven.remove(TexstBericht);
		PaneelBoven.remove(PaneelPlayingField);
		PaneelBeneden.remove(LabelBeurt);
		PaneelBeneden.remove(PaneelStoppenOpnieuwBeginnen);
	}


//ACTION PERFORMED METHOD (Knop klikken --> Actie?)	
	public void actionPerformed(ActionEvent click)	{
		Object source = click.getSource();
		for(int i=1; i<=9; i++)	{
			if(source == KnopLeeg[i] && Beurt <	10)	{
				if(!(Beurt % 2 == 0))
					KnopLeeg[i].setText("X");////////////////////////Teken voor TIC_TAC_TOE
				else
					KnopLeeg[i].setText("O");////////////////////////Teken voor TIC_TAC_TOE
				KnopLeeg[i].setEnabled(false);
				PaneelPlayingField.requestFocus();
				Beurt++;
                                KnopLeeg[i].setFont (new Font ("Arial", Font.BOLD, 200)); //de X en O grote
				checkWin();
				if(CPUSpel && win == false)
					AI();
			}
		}
		if(source == MenuNieuweGame || source == MenuInstructies || source == MenuOver)	{
			clearPanelSouth();
			setDefaultLayout();
			
			if(source == MenuNieuweGame)	{//NewGame 
				PaneelBoven.add(PaneelNieuweGame);
			}	
			else if(source == MenuInstructies || source == MenuOver)	{
				if(source == MenuInstructies)	{// Instructions
					Bericht = 	"Instructies:\n\n" +
									"Je doel is om de eerste speler te zijn die 3 X's of O's in een\n" +// uitleg over spel
									"rij te krijgen. (Horizontaal, Diagonaal, of verticaal)\n" +
									Speler1 + ": X\n" +
									Speler2 + ": O\n";
				} else	{//Over
					Bericht = 	"Over:\n" +
									"Title: Tic Tac Toe\n" +//titel
									"Maker: Lars Kamman\n";// naam maker
				}
				TexstBericht.setText(Bericht);// set bericht neer
				PaneelBoven.add(TexstBericht);
			}	
			PaneelHoofdMenu.add(PaneelBoven);
		}
		else if(source == Knop1v1 || source == Knop1VSCPU)	{// waarschuwing als je een nieuw potje wil starten
			if(InSpel)	{                                // als je nog met jou oude bezich betent
				Opties = askMessage("Als je een nieuwe game start," +
					"Zal uw huidige spel verloren gaan..." + "\n" +
					"Weet je zeker dat je wil stoppen?", 
					"Spel Stoppen?" ,JOptionPane.YES_NO_OPTION
				);
				if(Opties == JOptionPane.YES_OPTION)
					InSpel = false;
			}
			if(!InSpel)	{
				KnopDoorgaan.setEnabled(true); // de opties die je kunt kiezen als je wil stoppen met je huidige spel
				if(source == Knop1v1)	{// 1 v 1 Game
					Speler2 = tempSpeler2;
					Speler1Gewonnen = 0;
					Speler2Gewonnen = 0;
					LabelMode.setText("1 v 1");
					CPUSpel = false;	
					newGame();
				} else	{// 1 v CPU Game
					Speler2 = "Computer";
					Speler1Gewonnen = 0;
					Speler2Gewonnen = 0;
					LabelMode.setText("1 v CPU");
					CPUSpel = true;
					newGame();
				}
			}
		}
		else if(source == KnopDoorgaan)	{
			checkTurn();
			showGame();
		}
		else if(source == KnopSpelerName)	{
			askUserForPlayerNames();
		}
		else if(source == MenuStoppen)	{
			Opties = askMessage("Weet je zeker dat je wil stoppen?", "Spel Stoppen", JOptionPane.YES_NO_OPTION); // geeft je optie of je wil stoppen
			if(Opties == JOptionPane.YES_OPTION) 
				System.exit(0);// als je ja drukt sluit je het programma(spel)
		}
		else if(source == KnopOpnieuwProberen)	{
			newGame();
			KnopOpnieuwProberen.setEnabled(false);
		}
		else if(source == KnopStoppen)	{
			quit();
		}
		PaneelHoofdMenu.setVisible(false);
		PaneelHoofdMenu.setVisible(true);
	}

}


/*	LAYOUT VAN DE GAME:
	
	THE WINDOW                                                              :   (PaneelMenu/PaneelHoofdMenu)
	PaneelMenu                                                              :   (DE MENU)
        PaneelHooftMenu                                                         :   (PaneelBoven/PaneelBeneden)
        PaneelBoven                                                             :  (PaneelPlayingField/Instuctie/Over:/NEW GAME)
        PaneelBeneden                                                           :   (STATUS BAR/Terug BUTTON)
*/
