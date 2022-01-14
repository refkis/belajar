class Person {
    String firstName;
    String lastName;
    String fullname = firstName + lastName;

     void sayHello (String paramName){
        System.out.println("Hello " + paramName + " My name is " + firstName);
    }
    final String Country = "Indonesia";
}
