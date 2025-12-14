package main;

import javax.swing.JOptionPane;

public class Exercicio006 {

	public static void main(String[] args) {
		int idade;
		
		idade = Integer.parseInt(JOptionPane.showInputDialog("Entre com a idade"));
		
		if(idade < 18) {
			JOptionPane.showMessageDialog(null, "Menor de idade");
		}
	}

}
