package main;

import javax.swing.JOptionPane;

public class Exercicio023 {

	public static void main(String[] args) {
		int op = 1000;
		int L1 = 0;
		int L2 = 0;
		
		do {
			op = Integer.parseInt(JOptionPane.showInputDialog(""
					+ "<<<<<<<<<<<<<<          Menu          >>>>>>>>>>>>>"
					+ "\nEntre com o número referente a operação que deseja:"
					+ "\n1 - Área do quadrado"
					+ "\n2 - Área do retângulo"
					+ "\n0 - Sair"));
			switch(op) {
			case 1: L1 = Integer.parseInt(JOptionPane.showInputDialog("Entre com o lado do quadrado"));
				System.out.println("A área do quadrado é: " + L1 * L1);					
				break;
			case 2: L1 = Integer.parseInt(JOptionPane.showInputDialog("Entre com um lado do retângulo"));
				L2 = Integer.parseInt(JOptionPane.showInputDialog("Entre com um lado do retângulo"));
				System.out.println("A área do quadrado é: " + L1 * L2);	
				break;
			case 0:
				break;
				default: op = 0;
			}
			
		}while(op != 0);
		System.out.println("Bye!");
	}

}
