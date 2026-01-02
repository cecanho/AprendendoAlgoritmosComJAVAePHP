package main;

import javax.swing.JOptionPane;

public class Exercicio012 {

	public static void main(String[] args) {
		int b = Integer.parseInt(JOptionPane.showInputDialog("Informe a base do triangulo"));
		int h = Integer.parseInt(JOptionPane.showInputDialog("Informe a altura do triangulo"));
 
		JOptionPane.showMessageDialog(null, "A área do triângulo é " + b*h/2);
	}

}
