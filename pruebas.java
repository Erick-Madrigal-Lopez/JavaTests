import java.util.ArrayList;
import java.util.Arrays;
//import java.util.Scanner;

public class pruebas{
    /**
     * @param args
     */
    public static void main(String[] args) {
        /*
        programa1();
        programa2();
        programa3();
        programa4();
        programa5();
        programa6();
        */
    }

    public static void programa1(){
        System.out.println("PROGRAMA 1\n");
        String cadena = "cadena";
        char[] arr = cadena.toCharArray();
        char temp;
        for (int i = 0; i<arr.length; i++){
            for (int j = 0; j<arr.length; j++){
                if (arr[i]>arr[j]){
                    temp = arr[i];
                    arr[i] = arr[j];
                    arr[j] = temp;
                }
            }
        }

        for (int i = arr.length-1; i>=0; i--){
            System.out.print(arr[i]);
        }
    }

    public static void programa2(){
        System.out.println("\n\nPROGRAMA 2\n");
        String cadena = "Hola mundo";
        String cadena_sin_vocales = cadena.replaceAll("[aeiouAEIOU]", " ");
        String[] palabras = cadena_sin_vocales.split("\\s+");

        System.out.println(Arrays.toString(palabras));
    }

    public static void programa3(){
        System.out.println("\nPROGRAMA 3\n");
        String cadena = "Hola soy Erick";
        String vocales = (cadena.trim()).replaceAll("[^aeiouAEIOU]", "");
        char [] consonates = vocales.toCharArray();
        System.out.println(Arrays.toString(consonates));
    }

    public static void programa4(){
        System.out.println("\nPROGRAMA 4\n");
        System.out.println("A: "+fun_a("hola", "hola2"));
        System.out.println("B: "+fun_b("para que", "porque sw"));
        System.out.println("C: "+fun_c("hola este es un mensaje", "i"));
    }

    public static void programa5(){
        System.out.println("\nPROGRAMA 5\n");
        ArrayList<Alumno> alumno = new ArrayList<>();
        alumno.add(new Alumno("Erick", 22));
        alumno.add(new Alumno("Mike", 27));
        alumno.add(new Alumno("Jonh", 32));
        for (int i = 0; i<alumno.size(); i++){
            if (alumno.get(i).edad >= 18 && alumno.get(i).edad <= 29){
                System.out.println(alumno.get(i).nombre+" <-> "+alumno.get(i).edad);
            }
        }
        
    }

    public static void programa6(){
        System.out.println("\nPROGRAMA 6\n");
        //Scanner scanner = new Scanner(System.in);
        //System.out.println("apellido paterno: ");
        String apellido_paterno = "madrigal";
        //System.out.println("apellido materno: ");
        String apellido_materno = "lopez";
        //System.out.println("nombre: ");
        String nombre = "erick";
        //System.out.println("fecha de nacimiento: ");
        String fecha_nac = "17/abril/2013";
        //System.out.println("Sexo: ");
        String sexo = "hombre";

        String ap = apellido_paterno.substring(0, 2);
        String am = apellido_materno.substring(0, 1);
        String nom = nombre.substring(0, 1);
        String sex = sexo.substring(0, 1);
        String[] array_fecha = fecha_nac.split("/");
        String dia = array_fecha[0], mes = array_fecha[1], anio = array_fecha[2].substring(2,4);

        switch (mes.toUpperCase()){
            case "ENERO": mes = "01";
                break;
            case "FEBRERO":mes = "02";
                break;
            case "MARZO": mes = "03";
                break;
            case "ABRIL": mes = "04";
                break;
            case "MAYO": mes = "05";
                break;
            case "JUNIO": mes = "06";
                break;
            case "JULIO": mes = "07";
                break;
            case "AGOSTO": mes = "08";
                break;
            case "SEPTIEMBRE": mes = "09";
                break;
            case "OCTUBRE": mes = "10";
                break;
            case "NOVIEMBRE": mes = "11";
                break;
            case "DICIEMBRE": mes = "12";
                break;
        }

        String curp = ap+am+nom+anio+mes+dia+sex+"JCDPHA3";
        System.out.println(curp.toUpperCase());

    }

    //Métodos para el @programa4
    public static boolean fun_a(String cad1, String cad2){
        if (cad1.equals(cad2)) return true;
        return false;
    }
    public static boolean fun_b(String cad1, String cad2){
        if (cad1.length() == cad2.length()) return true;
        return false;
    }
    public static boolean fun_c(String cad, String contiene){
        if (cad.contains(contiene)) return true;
        return false;
    }

    //OBJETO PARA @programa5
    static class Alumno{
        String nombre;
        int edad;
        public Alumno(String nombre, int edad){
            this.nombre = nombre;
            this.edad = edad;
        }
    }
}