using System;

namespace touseef
{
    class Program
    {
        static void Main(string[] args)
        {



            int myNum = 15;
            Console.WriteLine(myNum);
            string ahmed = "touseef ahmed";
            Console.WriteLine(ahmed);
            double point = 12.2;
        Console.WriteLine(point);
            char sz= 'A';
            Console.WriteLine(sz);
            bool taimoor= false;
            Console.WriteLine(taimoor);

            /* const int number = 15;
             number = 20;
             Console.WriteLine(myNum); */








            string firstname = "Touseef";
            string lastname = "Ahmed";
            string full=firstname+lastname;
            Console.WriteLine(full);

            int first = 50;
            int last = 20;
            int sum = first + last;
            Console.WriteLine(sum);


            /*
            bool f = true;
            bool l=false;
            bool g = f + l;
          Console.WriteLine(g); */


            int x, y, z;
            x = y = z = 50;
            Console.WriteLine(x);


            Console.WriteLine(y);

            int myInt = 10;
            double myDouble = 5.25;
            bool myBool = true;

            Console.WriteLine(Convert.ToBoolean(myInt));
            Console.WriteLine(Convert.ToString(myInt));    // convert int to string
            Console.WriteLine(Convert.ToDouble(myInt));    // convert int to double
            Console.WriteLine(Convert.ToInt32(myDouble));  // convert double to int
            Console.WriteLine(Convert.ToString(myBool));   // convert bool to string



            /* form
            
            Console.WriteLine("Enter username:");
            

           
            string userName = Console.ReadLine();
            


            // Print the value of the variable (userName), which will display the input value
            Console.WriteLine("Username is: " + userName);
           

            Console.WriteLine("enter password");
            string password = Console.ReadLine();
            Console.WriteLine("pasword is: " + userName);
           

            Console.WriteLine("enter contact");
            string contact = Console.ReadLine();
            Console.WriteLine("contact is: " + userName);
            */

            int w = 5;
            y = 8;
            z = w + y;
            Console.WriteLine(z);


            int m = 5;
            int n = 3;
            Console.WriteLine(m > n);

            Console.WriteLine(m < n);


            if (20 > 18)
            {
                Console.WriteLine("20 is greater than 18");
            }

            /* int o = 7;
            int l = 6;
            if (l > 0)
            {
                Console.WriteLine("7 is greater then 9");
            }

            else { 
                Console.WriteLine("9 is less then 7");
            }*/

            int time = 24;
            if (time < 8)
            {
                Console.WriteLine("Good morning.");
            }
            else if (time < 15)
            {
                Console.WriteLine("Good day.");
            }
            else
            {
                Console.WriteLine("Good evening.");
            }



            }
    }
}