
public class Profile {

    private String name;

    private String WhatsApp;

    private String major;

    private String favSport;

    private String favHobby;

    public Profile(String name, String WhatsApp, String major, String favSport, String favHobby){

        this.name = name;
        this.WhatsApp = WhatsApp;
        this.major = major;
        this.favSport = favSport;
        this.favHobby = favHobby;

    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getWhatsApp() {
        return WhatsApp;
    }

    public void setWhatsApp(String whatsApp) {
        WhatsApp = whatsApp;
    }

    public String getMajor() {
        return major;
    }

    public void setMajor(String major) {
        this.major = major;
    }

    public String getFavSport() {
        return favSport;
    }

    public void setFavSport(String favSport) {
        this.favSport = favSport;
    }

    public String getFavHobby() {
        return favHobby;
    }

    public void setFavHobby(String favHobby) {
        this.favHobby = favHobby;
    }
}
