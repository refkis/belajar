public class Factorial {
    public static void main(String[] args) {
    //    System.out.println(hasilFaktorial(5)); 
       System.out.println(recursiveMethod(5)); 
    }

    // static int hasilFaktorial(int value) {
    //     int result = 1;
    //     for (int i = 1; i <= value; i++) {          
    //         result *= i;

    //     };
    //     return result;
    // };

    static int recursiveMethod (int value){
        if (value == 1){
            return 1;
        } else {
            return value * recursiveMethod(value-1);
        }
    }

}
