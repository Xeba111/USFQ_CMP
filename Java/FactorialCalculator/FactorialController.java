import java.util.concurrent.Executors;
import java.util.concurrent.*;
import java.util.concurrent.ExecutorService;
import javafx.concurrent.Task;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.*;
import java.math.BigInteger;
import java.util.concurrent.*;


public class FactorialController {
   
   //Variables de FXML
   @FXML private Button calculateButton;
   @FXML private TextField numberTextField;
   @FXML private TextField tasksTextField;
   @FXML private ListView<BigInteger> tasksListView;   
   @FXML private Label displayNumero;
   @FXML private Label displayThreads;
   @FXML private TextField resultTextField;
   @FXML private TextField parallelTextField;
   @FXML private TextField onlyTextField;
   
   //Parámetros de la clase
   private ObservableList<BigInteger> resultadosTask = FXCollections.observableArrayList();
   
    protected String FactorialParalelo(int n, int numTasks )throws InterruptedException, ExecutionException{
    
     
        ExecutorService executor = Executors.newFixedThreadPool(numTasks); // create a thread pool
        long Start = System.currentTimeMillis();
        int chunkSize = n / numTasks; // calculate the chunk size
        int remainder = n % numTasks; // calculate the remainder
        
        // submit a task for each chunk
        Future<BigInteger>[] futures = new Future[numTasks];
        int start = 1;
        for (int i = 0; i < numTasks; i++) {
            int end = start + chunkSize - 1;
            if (i < remainder) {
                end++;
            }
            int finalStart = start;
            int finalEnd = end;
            futures[i] = executor.submit(() -> factorial(finalStart, finalEnd));
            start = end + 1;
        }
        
        // wait for all tasks to complete and multiply the results
        BigInteger result = new BigInteger("1");
        for (Future<BigInteger> future : futures) {
            result = result.multiply(future.get());
            tasksListView.getItems().add(result);
        }
        long end = System.currentTimeMillis();
        long time=end - Start;
         
        System.out.println(result + "Tiempo: " + (time) / 1000.0);
        executor.shutdown(); // shutdown the thread pool
        return result + "Tiempo: " + (time) / 1000.0;
    }
    
    // calculates the factorial of a range of numbers
    private static BigInteger factorial(int start, int end) {
        BigInteger result2 = new BigInteger("1");
        for (int i = start; i <= end; i++) {
            result2 = result2.multiply(BigInteger.valueOf(i));
        }
        return result2;
    }
    
   protected String FactorialSecuencial(int NUMBER) {
     
      long Start = System.currentTimeMillis();
   	BigInteger r= new BigInteger("1");
      
      for (int i = 2; i <= NUMBER; i++) {
         r = r.multiply(BigInteger.valueOf(i));
      }
     	long end = System.currentTimeMillis();
      long time=end - Start;
     	String factorial = r.toString();
      return  factorial + "Tiempo: " + (time) / 1000.0;
   }
   
   
   private void initialize(){
      tasksListView.setItems(resultadosTask);
   }
   
   
   @FXML
   void getNumberButtonPressed(ActionEvent event)throws InterruptedException, ExecutionException{
      resultadosTask.clear();
      
      //Coger los datos necesarios para operar
      try{
         BigInteger numeroCalcular = BigInteger.valueOf(Integer.parseInt(numberTextField.getText()));
         BigInteger numeroThreads = BigInteger.valueOf(Integer.parseInt(tasksTextField.getText()));
         
         String numeroCalcularInt = numberTextField.getText();
         String numeroThreadsInt = tasksTextField.getText();
         
         displayNumero.setText("Numero ingresado: "+ numeroCalcularInt);
         displayThreads.setText("Numero de tasks a usar: " + numeroThreadsInt);
         
         String x = FactorialSecuencial(Integer.parseInt(numeroCalcularInt));
         int x1 = x.length();
         resultTextField.setText(x.substring(0,x1-11 ));
         onlyTextField.setText(x.substring(x1-5,x1));
         System.out.println(x);
         String y = FactorialParalelo(Integer.parseInt(numberTextField.getText()),Integer.parseInt(tasksTextField.getText()));
         int y1 = y.length();
         parallelTextField.setText(y.substring(y1-5,y1));
         

      } catch(NumberFormatException e){
         numberTextField.setText("Ingrese un número");
         numberTextField.selectAll();
         numberTextField.requestFocus();
         tasksTextField.setText("Ingrese un número");
         tasksTextField.selectAll();
      }
       
   }
}