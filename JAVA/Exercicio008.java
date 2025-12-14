package main;

import javax.swing.JOptionPane;

public class Exercicio008 {

	public static void main(String[] args) {
		String nomeP1, nomeP2;
		int idadeP1, idadeP2;
		
		nomeP1 = JOptionPane.showInputDialog("Entre com o nome da 1 pessoa:");
		idadeP1 = Integer.parseInt(JOptionPane.showInputDialog("Entre com a idade da 1 pessoa:"));
		
		nomeP2 = JOptionPane.showInputDialog("Entre com o nome da 2 pessoa:");
		idadeP2 = Integer.parseInt(JOptionPane.showInputDialog("Entre com a idade da 2 pessoa:"));
		
		if(idadeP1 > idadeP2) {
			JOptionPane.showMessageDialog(null, nomeP1);
		}else if(idadeP2 > idadeP1) {
			JOptionPane.showMessageDialog(null, nomeP2);
		}else {
			JOptionPane.showMessageDialog(null, "Idades iguais");
		}

	}

}
