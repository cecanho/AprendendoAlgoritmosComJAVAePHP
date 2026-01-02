package main;

import javax.swing.JOptionPane;

public class Exercicio014 {

	public static void main(String[] args) {
		int n1 = Integer.parseInt(JOptionPane.showInputDialog("Entre com um número:"));
		int n2 = Integer.parseInt(JOptionPane.showInputDialog("Entre com um número:"));
		
		if(n1 > n2) {
			JOptionPane.showMessageDialog(null, n1 + " é maior que " + n2);
		}else if(n2 > n1) {
			JOptionPane.showMessageDialog(null, n2 + " é maior que " + n1);
		}else {
			JOptionPane.showMessageDialog(null, "IGUAIS");
		}
	}

}
