 import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import javafx.application.Application;

public class Factorial extends Application{

   @Override
   public void start(Stage stage) throws Exception {
      Parent root = 
         FXMLLoader.load(getClass().getClassLoader().getResource("proyecto2_design.fxml"));
         
      Scene scene = new Scene(root);
      stage.setTitle("Calcular factorial");
      stage.setScene(scene);
      stage.show(); 
   }

   public static void main(String[] args) {
      launch(args);
   }

}
