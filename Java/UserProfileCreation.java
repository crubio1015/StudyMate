package cen_4010_final_project;

import java.util.Scanner;

public class UserProfileCreation{ //just prompts for user input

	public static void main(String[] args) {
		
		Scanner pNam = new Scanner(System.in);
		System.out.println("Welcome to StudentConnect!");
		System.out.println("To get things started, please enter your first and last name.");
		
		String personName = pNam.nextLine();
		
		System.out.println("Hello, " + personName + ". Please create a username.");
		
		Scanner pUser = new Scanner(System.in);
		String userName = pUser.nextLine();
		
		System.out.println("Great! Now create a secure password.");
		Scanner pPass = new Scanner(System.in); //needs a database for security 
		
		String PassWord = pPass.nextLine();
		
		System.out.println("Thank you!");

	}

}
