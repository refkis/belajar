public class ForEach {
    public static void main(String[] args) {

        String[] nama = {
                "Refki", "Santri", "Trio"
        };

        // for (int i = 0; i < nama.length; i++) {
        //     System.out.println(nama[i]);
        // }

        for (var value : nama) {
            System.out.println(value);
        }
    }
}
