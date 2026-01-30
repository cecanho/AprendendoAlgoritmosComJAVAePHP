package main;

import javax.swing.JOptionPane;

public class Exercicio021 {

	public static void main(String[] args) {
		String controle = "n";
		int quantidade = 0;
		int soma = 0;
		int N = 0;
		double media;
		
		while(!controle.equals("s")) {
			N = Integer.parseInt(JOptionPane.showInputDialog(null, "Entre com um número inteiro"));
			soma += N;
			quantidade++;
			controle = JOptionPane.showInputDialog(null, "Digite 's' para encerrar");
		}
		media = soma/quantidade;
		JOptionPane.showMessageDialog(null, "A média dos números " 
				   + "lidos é: " + media
				   + "\nA quantidade de números"
				   + " lidos foi: " + quantidade
				   + "\nA soma dos números"
				   + " lidos foi: " + soma);
	}

}