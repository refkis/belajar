public class MotorcycleApp {

    public static void main(String[] args) {
        var motor1 = new Motorcycle("CBR","Honda");
        var motor2 = new Motorcycle("150");
        var motor3 = new Motorcycle();
            motor3.name = "King";
            motor3.brand = "Yamaha";
            motor3.cc = "125";

        System.out.println(motor1.name);
        System.out.println(motor2.cc);
        System.out.println(motor2.brand);

    }
}
