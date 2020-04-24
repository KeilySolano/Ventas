using System;
using System.Collections.Generic;
using System.Text;

namespace SistemaVentas
{
    class Program
    {
        static void Main(string[] args)
        {
            string nombre;
            string nit;
            double sub1;
            string pro1;
            double precio1;
            int cant1;
            string linea;

            Console.Write("ingrese el nombre: ");
            nombre = Console.ReadLine();

            Console.Write("ingrese nit: ");
            nit = Console.ReadLine();

            sub1 = 0;

            for (int x = 0; x < 3; x++)
            {
                Console.Write("ingrese el nombre del producto: ");
                pro1 = Console.ReadLine();

                Console.Write("ingrese el precio del producto: ");
                linea = Console.ReadLine();
                precio1 = double.Parse(linea);

                Console.Write("ingrese el cantidad del producto: ");
                linea = Console.ReadLine();
                cant1 = int.Parse(linea);

                sub1 = sub1 + (precio1 * cant1);
            }

            Console.Write("el total de la compra es: " + sub1);

            Console.ReadKey();
        }
    }
}