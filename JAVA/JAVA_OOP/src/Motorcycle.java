class Motorcycle {
    String name;
    String brand;
    String cc;

    Motorcycle(String name, String paramBrand) {
        this.name = name;
        brand = paramBrand;
    }

    Motorcycle(String paramCc) {
        this(null, null);
        cc = paramCc;
    }

    Motorcycle() {
    }

}
