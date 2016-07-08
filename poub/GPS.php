
        <?php
/*
Description : Calcul de la distance entre 2 points en fonction de leur latitude/longitude
Auteur : Rajesh Singh (2014)
Site web : AssemblySys.com
 
Si vous trouvez ce code utile, vous pouvez montrer votre
appréciation à Rajesh en lui offrant un café ;)
PayPal: rajesh.singh@assemblysys.com
 
Du moment que cette notice (y compris le nom et détails sur l'auteur) est
inclue et N'EST PAS ALTÉRÉE, ce code est distribué selon la GNU General
Public License version 3 : http://www.gnu.org/licenses/gpl-3.0.fr.html
*/
 
        
 class GPS {

   
    public $degreLat; 
    public $minuteLat;
    public $secondeLat;
    public $degreLong;
    public $minuteLong;
    public $secondeLong;
    public $latitudeNumerique;
    public $longitudeNumerique;

    public function __construct($degreLat, $minuteLat, $secondeLat, $degreLong, $minuteLong, $secondeLong) {
        
        $this->degreLat = $degreLat; 
        $this->minuteLat = $minuteLat;
        $this->secondeLat = $secondeLat;
        $this->degreLong = $degreLong;
        $this->minuteLong = $minuteLong;
        $this->secondeLong = $secondeLong;
        $this->latitudeNumerique = $degreLat+($minuteLat/60)+($secondeLat/3600);
        $this->longitudeNumerique = $degreLong+($minuteLong/60)+($secondeLong/3600);
    }
        
    
    public function calculerDistance($autrePoint) {
        $degrees = rad2deg(acos((sin(deg2rad($this->latitudeNumerique))*sin(deg2rad($autrePoint->latitudeNumerique))) + (cos(deg2rad($this->latitudeNumerique))*cos(deg2rad($autrePoint->latitudeNumerique))*cos(deg2rad($this->longitudeNumerique-$autrePoint->longitudeNumerique)))));
        $distance = $degrees *  111319.44444444444; // 1 degré = 111111.31944444444444 m, sur base du diamètre moyen de la Terre (12756 km)
     
       return $distance;
       
        
    }
 }
 
 
    
