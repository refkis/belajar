class Motorcycle {
    String name;
    String brand;
    String cc;

    Motorcycle(String paramName, String paramBrand) {
        name = paramName;
        brand = paramBrand;
    }

    Motorcycle(String paramCc) {
        this(null, null);
        cc = paramCc;
    }

    Motorcycle() {
    }

}
