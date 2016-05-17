using System;
					
public class Program
{
	public static void Main(){
		
		public void woods(){
			Console.WriteLine("You happen upon the woods in scott jones backyard, do you go in? y/n");
			Console.WriteLine("Please be explicit with your answers as any other input will fail the system");
			string userInput1 = Console.ReadLine();
		
			bool userOption = userInput1.Equals("y");
	
			if ( userOption == true){
				Console.WriteLine("You now walk down the path the path and find a strange little home.");
			hobbit();
			}else{
			Console.WriteLine("Okay then, you can go home now.");
			}
		
}
	public void hobbit(){
		Console.WriteLine("Are you going to go into the house.");
		string userInput2 = Console.ReadLine();
		bool userOption2 = userInput2.Equals("y");
	
		if(userOption2 == true){
			Console.WriteLine("Well you entered the door and...");
			woods();
		}else{
			woods();
			}
		}

		woods();		
	}
}