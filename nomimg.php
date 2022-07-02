<?
// Función para generar nombres de 16 caracteres aleatorios
function F_gen_password($Paswd_Length){
   // set ASCII range for random character generation  
   $lower_ascii_bound = 50; // "2"
   $upper_ascii_bound = 122; // "z"
   // Exclude special characters and some confusing alphanumerics
   // o,O,0,I,1,l etc
   $notuse = array (58,59,60,61,62,63,64,73,79,91,92,93,94,95,96,108, 111);
   $i = 0;
   $password = '';
   while ($i < $Paswd_Length){
       mt_srand((double)microtime() * 1000000);
       // random limits within ASCII table
       $randnum = mt_rand($lower_ascii_bound, $upper_ascii_bound);
       if (!in_array($randnum, $notuse)){
            $password = $password.chr($randnum);
       $i++;
       };
    }; 
    return $password;
};
?>	