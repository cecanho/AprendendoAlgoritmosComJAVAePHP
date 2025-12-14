package main;

import javax.swing.JOptionPane;

public class Exercicio007 {

	public static void main(String[] args) {
		String senha = "123456", palavra;
		
		palavra = JOptionPane.showInputDialog("Entre com a senha:");
		
		if(palavra.equals(senha)) {
			JOptionPane.showMessageDialog(null, "Acesso Garantido!");
		}

	}

}
