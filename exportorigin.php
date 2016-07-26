<?php


include_once 'Ifrocean_BDD/Plage.php';
include_once 'Ifrocean_BDD/PlageHasZoneHasEspece.php';
include_once 'Ifrocean_BDD/ZoneHasEspece.php';



header('Content-Type: application/xml');
//header('Content-Disposition: attachment;filename="export.kml');

echo('<?xml version="1.0" encoding="UTF-8"?>');
?>


<kml xmlns="http://www.opengis.net/kml/2.2" xmlns:gx="http://www.google.com/kml/ext/2.2" xmlns:kml="http://www.opengis.net/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom">
<Document>
	<name>Natura 2015 - Pentrez - Exemple Export.kml</name>
	<StyleMap id="m_ylw-pushpin1">
		<Pair>
			<key>normal</key>
			<styleUrl>#s_ylw-pushpin</styleUrl>
		</Pair>
		<Pair>
			<key>highlight</key>
			<styleUrl>#s_ylw-pushpin_hl00</styleUrl>
		</Pair>
	</StyleMap>
	<Style id="s_ylw-pushpin_hl00">
		<IconStyle>
			<scale>1.3</scale>
			<Icon>
				<href>http://maps.google.com/mapfiles/kml/pushpin/ylw-pushpin.png</href>
			</Icon>
			<hotSpot x="20" y="2" xunits="pixels" yunits="pixels"/>
		</IconStyle>
		<LineStyle>
			<color>ffffaa00</color>
		</LineStyle>
		<PolyStyle>
			<color>7fffaa00</color>
		</PolyStyle>
	</Style>
	<Style id="s_ylw-pushpin">
		<IconStyle>
			<scale>1.1</scale>
			<Icon>
				<href>http://maps.google.com/mapfiles/kml/pushpin/ylw-pushpin.png</href>
			</Icon>
			<hotSpot x="20" y="2" xunits="pixels" yunits="pixels"/>
		</IconStyle>
		<LineStyle>
			<color>ffffaa00</color>
		</LineStyle>
		<PolyStyle>
			<color>7fffaa00</color>
		</PolyStyle>
	</Style>
	<Folder>
		<name>Fogéo</name>
		<open>1</open>
		
                  <?php $plageshaszoneshasespeces=PlageHasZoneHasEspece::getAllPlagesHasZonesHasEspeces();
            
            foreach ($plageshaszoneshasespeces as $plagehaszone){
                
            ?>
                <description>
                    <?php echo $plagehaszone->nomplage ?>
                    <?php echo $plagehaszone->nomespece ?>
                     <?php echo $plagehaszone->quantite ?>
                    <?php echo $plagehaszone->sumdensite ?>/m²
                
              
</description>
                  <?php  
            }
                ?>
		
               
		<Style>
			<ListStyle>
				<listItemType>check</listItemType>
				<bgColor>00ffffff</bgColor>
				<maxSnippetLines>2</maxSnippetLines>
			</ListStyle>
		</Style>
                         <?php $zonehasespeces=ZoneHasEspece::getAllZonesHasEspeces();
            foreach ($zonehasespeces as $zonehasespece){
            ?>
		<Placemark>
             
			<name>Zone n°<?php echo $zonehasespece->zone_id ?> </name>
			<description><!--Nombre préleveurs : 8-->

                            <?php echo $zonehasespece->nomespece?> <?php echo $zonehasespece->quantite?>  
                        </description>
			<styleUrl>#m_ylw-pushpin1</styleUrl>
			<Polygon>
				<tessellate>1</tessellate>
				<outerBoundaryIs>
					<LinearRing>
						<coordinates>
                                                    -<?php echo $zonehasespece->longA ?>,<?php echo $zonehasespece->latA ?>   
                                                    -<?php echo $zonehasespece->longB ?>,<?php echo $zonehasespece->latB ?>  
                                                     -<?php echo $zonehasespece->longC ?>,<?php echo $zonehasespece->latC ?> 
                                                     -<?php echo $zonehasespece->longD ?>,<?php echo $zonehasespece->latD ?>  
                                                    <!---4.298260551299795,48.18643740852482,0 -4.300167618696066,48.18610768892475,0 -4.300072660468564,48.18594695452178,0 -4.298180408797481,48.18631488049339,0 -4.298260551299795,48.18643740852482,0-->
						</coordinates>
					</LinearRing>
				</outerBoundaryIs>
			</Polygon>
		</Placemark>
                 <?php  
            }
                ?>
		
		
               
	</Folder>
</Document>
</kml>
