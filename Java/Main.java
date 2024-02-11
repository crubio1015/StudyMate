import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner user_input = new Scanner(System.in);
        String name;
        String WhatsApp;
        String major;
        String sport;
        String hobby;
        int x;

        //Create database
        //-----------------------------------------------------------------
        Database db = new Database(); //database for active profiles
        //-----------------------------------------------------------------

        //Prompt new user for their information
        //-------------------------------------------------------------------
        System.out.println("Welcome to Profile Creation. Please provide the following information\n");

        System.out.print("Enter Name: ");
        name = user_input.nextLine();

        System.out.print("Enter WhatsApp Number: ");
        WhatsApp = user_input.nextLine();

        System.out.print("Enter your Major: ");
        major = user_input.nextLine();

        System.out.print("Enter your Favorite Sport: ");
        sport = user_input.nextLine();

        System.out.print("Enter your Favorite Hobby: ");
        hobby = user_input.nextLine();

        System.out.println();

        //Check for matches and recommend other users
        int i = 0, length = db.getSize();

        while(i < length) {
            Profile p = (Profile) db.getList().get(i);
            if(major.equalsIgnoreCase(p.getMajor())){
                System.out.println("You share the same Major with " + p.getName() + ".");
                do {
                System.out.println("Would you like to Connect?\n1.Yes\n2.No");
                 x = user_input.nextInt();

                    switch (x) {
                        case 1 -> System.out.println(p.getName() + " WhatsApp number is " + p.getWhatsApp());
                        case 2 -> System.out.println("No Problem. You can find Others to connect with");
                        default -> System.out.println("Invalid Option. Try Again.");
                    }
                }while (x != 1 && x != 2);
            }
            else if (sport.equalsIgnoreCase(p.getFavSport())) {
                System.out.println("You share the same Favorite Sport with " + p.getName());
                do {
                    System.out.println("Would you like to Connect?\n1.Yes\n2.No");
                    x = user_input.nextInt();

                    switch (x) {
                        case 1 -> System.out.println(p.getName() + " WhatsApp number is " + p.getWhatsApp());
                        case 2 -> System.out.println("No Problem. You can find Others to connect with");
                        default -> System.out.println("Invalid Option. Try Again.");
                    }
                }while (x != 1 && x != 2);
            }
            else if (hobby.equalsIgnoreCase(p.getFavHobby())) {
                System.out.println("You share the same Hobby with " + p.getName());
                do {
                    System.out.println("Would you like to Connect?\n1.Yes\n2.No");
                    x = user_input.nextInt();

                    switch (x) {
                        case 1 -> System.out.println(p.getName() + " WhatsApp number is " + p.getWhatsApp());
                        case 2 -> System.out.println("No Problem. You can find Others to connect with");
                        default -> System.out.println("Invalid Option. Try Again.");
                    }
                }while (x != 1 && x != 2);
            }
            i++;
        }

        //Add new user to the database
        Profile newP = new Profile(name,WhatsApp,major,sport,hobby);
        db.add(newP);

    }

}
