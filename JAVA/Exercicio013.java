package main;

import javax.swing.JOptionPane;

public class Exercicio013 {

	public static void main(String[] args) {
		int n = Integer.parseInt(JOptionPane.showInputDialog("Entre com um número inteiro:"));
		
		if(n > 100) {
			JOptionPane.showMessageDialog(null, "Você Conseguiu!");
		}else {
			JOptionPane.showMessageDialog(null, n + " não é maior que 100!");
		}

	}

}
