package main;

import javax.swing.JOptionPane;

public class Exercicio018 {

	public static void main(String[] args) {
		int N;
		int SOMA = 0;
		
		N = Integer.parseInt(JOptionPane.showInputDialog(""
				+ "A soma deve ir até qual numero?"));
		
		for(int ACUM = 1;ACUM <= N; ACUM++) {
			SOMA += ACUM;
		}
		JOptionPane.showMessageDialog(null, "A soma dos num. naturais" 
                + " é igual a: " + SOMA);
	}

}
