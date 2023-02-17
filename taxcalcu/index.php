
<!DOCTYPE html>
<html>
    <head>
        <title>Tax Calculator</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <div class="tax-calculator">
        <h1>Tax Calculator</h1>
        <form>
          <div class="input-group">
            <label for="income">Salary:</label>
            <input type="number" id="income" name="income" value="<?php echo $income;?>"required>
          </div>

          <div class="wrapper">
            <input type="radio" name="select" id="option-1" value="mon" checked required>
            <input type="radio" name="select" id="option-2" value="bi" required>
              <label for="option-1" class="option option-1">
                <div class="dot"></div>
                 <span>Monthly</span>
                 </label>
              <label for="option-2" class="option option-2">
                <div class="dot"></div>
                 <span>Bi-Monthly</span>
              </label>
           </div>
           
          <button type="submit" name="compute">Calculate</button>
        </form>

        <div id="result">
          <!-- <p>Tax: <span id="tax-amount"></span></p> -->
         <?php if(isset($_GET['compute'])) 
    {
                    
                        $salary = $_GET["income"];
                        $salaryy = $_GET["income"] ;
                        $salaryType = $_GET["select"];
                        $excess;
                        $annualTax;
                        $monthlyTax;
                        
                    
                        if($salaryType == "mon" )
                        {
                            $salary*=12;
                            if($salary<=250000.0)
                            {
                                $monthlyTax = 0.0;
                                $annualTax =0.0;
                            }
                            else if($salary >250000.0 && $salary <= 400000.0)
                            {
                                $excess =  $salary-250000.0;
                                $annualTax = $excess*0.2;
                                $monthlyTax = $annualTax/12;
                            }
                            else if($salary >400000.0 && $salary <= 800000.0)
                            {
                                $excess =  $salary-400000.0;
                                $annualTax = 30000+$excess*0.25;
                                $monthlyTax = $annualTax/12;
                            }
                            else if($salary >800000.0 && $salary <= 2000000.0)
                            {
                                $excess =  $salary-800000.0;
                                $annualTax = 130000+$excess*0.30;
                                $monthlyTax = $annualTax/12;
                            }
                            else if($salary >2000000.0 && $salary <= 8000000000.0)
                            {
                                $excess =  $salary-2000000.0;
                                $annualTax = 490000+$excess*0.32;
                                $monthlyTax = $annualTax/12;
                            }
                            else if($salary >8000000.0)
                            {
                                $excess =  $salary-8000000.0;
                                $annualTax = 2410000+$excess*0.35;
                                $monthlyTax = $annualTax/12;
                            }
                            echo "Salary: "; 
                            echo number_format($salaryy,2)."<br>";
                            echo "Annual Salary: PHP "; 
                            echo number_format($salary,2)."<br>";
                            echo "Est Annual Tax: PHP ";
                            echo number_format($annualTax,2)."<br>";
                            echo "Est Monthly Tax: PHP ";
                            echo number_format($monthlyTax,2)."<br>";
                        }
                        if($salaryType == "bi" )
                        {
                            $salary*=24;
                            if($salary<=250000.0)
                            {
                                $monthlyTax = 0.0;
                                $annualTax =0.0;
                            }
                            else if($salary >250000.0 && $salary <= 400000.0)
                            {
                                $excess =  $salary-250000.0;
                                $annualTax = $excess*0.2;
                                $monthlyTax = $annualTax/12;
                            }
                            else if($salary >400000.0 && $salary <= 800000.0)
                            {
                                $excess =  $salary-400000.0;
                                $annualTax = 30000+$excess*0.25;
                                $monthlyTax = $annualTax/12;
                            }
                            else if($salary >800000.0 && $salary <= 2000000.0)
                            {
                                $excess =  $salary-800000.0;
                                $annualTax = 130000+$excess*0.30;
                                $monthlyTax = $annualTax/12;
                            }
                            else if($salary >2000000.0 && $salary <= 8000000000.0)
                            {
                                $excess =  $salary-2000000.0;
                                $annualTax = 490000+$excess*0.32;
                                $monthlyTax = $annualTax/12;
                            }
                            else if($salary >8000000.0)
                            {
                                $excess =  $salary-8000000.0;
                                $annualTax = 2410000+$excess*0.35;
                                $monthlyTax = $annualTax/12;
                            }
                            echo "Salary: "; 
                            echo number_format($salaryy,2)."<br>";
                            echo "Annual Salary: PHP "; 
                            echo number_format($salary,2)."<br>";
                            echo "Est Annual Tax: PHP ";
                            echo number_format($annualTax,2)."<br>";
                            echo "Est Monthly Tax: PHP ";
                            echo number_format($monthlyTax,2)."<br>";
                        }
                            
    }

    ?>
    <script type="text/javascript" src="script.js"></script>
    
        </div>
      </div>
      <footer class="footer">
            <p>Rico Nieto, 2022<br>
            <a href="mailto:rico.nieto.cics@ust.edu.ph">rico.nieto.cics@ust.edu.ph</a></p>
      </footer>
</html>
