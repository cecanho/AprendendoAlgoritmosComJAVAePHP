package main;

import javax.swing.JOptionPane;

public class Exercicio017 {

	public static void main(String[] args) {
		int V;
		int IMPARES = 0;
		
		for(V = 5;V <= 36; V+=2) {
			IMPARES++;
		}
		JOptionPane.showMessageDialog(null, "Temos " + IMPARES + " impares de 5 a 36");
	}

}
