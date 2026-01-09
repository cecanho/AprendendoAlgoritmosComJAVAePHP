package main;

import javax.swing.JOptionPane;

public class Exercicio016 {

	public static void main(String[] args) {
		double l1 = 0.0;
		double l2 = 0.0;
		String frase;
		// Valor de PI importado da biblioteca matemática Math.PI
		// Elevar um número ao quadrado utlize a função Math.pow(número, 2)
		
		int opcao = Integer.parseInt(JOptionPane.showInputDialog("Menu (Escolha uma das opções)"
				+ "\n1 - Área do quadrado"
				+ "\n2 - Área do retângulo"
				+ "\n3 - Área do Círculo"
				+ "\n4 - Área do triângulo"
				+ "\n0 - Sair"));
		
		switch(opcao) {
		case 1:
			l1 = Double.parseDouble(JOptionPane.showInputDialog("Entre com um lado do quadrado"));
			JOptionPane.showMessageDialog(null, "A Área do quadrado é: " + l1 * l1);
			break;
		case 2:
			l1 = Double.parseDouble(JOptionPane.showInputDialog("Entre com o primeiro lado do retângulo"));
			l2 = Double.parseDouble(JOptionPane.showInputDialog("Entre com o segundo lado do retângulo"));
			JOptionPane.showMessageDialog(null, "A Área do retângulo é: " + l1 * l2);
			break;
		case 3:
			l1 = Double.parseDouble(JOptionPane.showInputDialog("Entre com o raio do círculo"));
			frase = String.format("A Área do círculo é: %.2f", Math.PI * Math.pow(l1, 2));
			JOptionPane.showMessageDialog(null, frase);
			break;
		case 4: 
			l1 = Double.parseDouble(JOptionPane.showInputDialog("Entre com a base do triângulo"));
			l2 = Double.parseDouble(JOptionPane.showInputDialog("Entre com a altura do triângulo"));
			frase = String.format("A Área do triângulo é: %.2f", l1 * l2 / 2);
			JOptionPane.showMessageDialog(null, frase);
			break;
		case 0:
			JOptionPane.showMessageDialog(null, "Bye!");
			break;
		default:
			JOptionPane.showMessageDialog(null, "Opcao Invalida!");
		}
	}

}
