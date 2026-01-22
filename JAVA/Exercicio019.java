package main;

import javax.swing.JOptionPane;

public class Exercicio019 {

	public static void main(String[] args) {
		double NOTA = 0.0;
		double SOMA = 0.0;

		for(int ACUM = 0;ACUM < 3;ACUM++) {
			NOTA = Double.parseDouble(JOptionPane.showInputDialog(""
					+ "Entre com a nota do aluno:"));
			SOMA += NOTA;
		}
		String frase = String.format("%.1f", SOMA/3);
		JOptionPane.showMessageDialog(null, ""
				+ "A média das notas dos"
				+ " alunos é igual a: " 
				+ frase);
	}

}
