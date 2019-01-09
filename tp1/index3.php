<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Formulaire nouvel apprenant</title>
</head>
<body>
  <?php
  if (empty($_POST['lastName']) || empty($_POST['firstName']) || $_POST['day'] === 'null' || $_POST['month'] === 'null' || $_POST['year'] === 'null' || $_POST['PoB'] === 'null' || $_POST['nationality'] === 'null' || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['phone']) || $_POST['diploma'] === 'null' || empty($_POST['numberPE']) || $_POST['numberBadge'] === null || empty($_POST['codecademyLinks']) || empty($_POST['hero']) || empty($_POST['hack']) || empty($_POST['exp'])) {
    ?>
    <form action="index3.php" method="post">
      <div class="presentation">
      <label for="lastName">Nom :</label>
      <input type="text" name="lastName" value="" required>
      <label for="firstName">Prénom :</label>
      <input type="text" name="firstName" value="" required>
      <label for="DoB">Date de naissance :</label>
      <select name="day">
        <option value="null">JOUR</option>
        <?php
        for ($day = 1; $day < 32 ; $day++) {
          ?>
          <option value="<?= $day; ?>"><?= $day; ?></option>
          <?php
        }
        ?>
      </select>
      <select name="month">
        <option value="null">MOIS</option>
        <?php
        for ($month = 1; $month < 13 ; $month++) {
          ?>
          <option value="<?= $month; ?>"><?= $month; ?></option>
          <?php
        }
        ?>
      </select>
      <select name="year">
        <option value="null">ANNÉE</option>
        <?php
        for ($year = 1900; $year < 2019 ; $year++) {
          ?>
          <option value="<?= $year; ?>"><?= $year; ?></option>
          <?php
        }
        ?>
      </select>
      <label for="PoB">Pays de naissance :</label>
      <select name="PoB">
        <option value="null">PAYS</option>
        <option value="Afghanistan">Afghanistan </option>
        <option value="Afrique_Centrale">Afrique_Centrale </option>
        <option value="Afrique_du_sud">Afrique_du_Sud </option>
        <option value="Albanie">Albanie </option>
        <option value="Algerie">Algerie </option>
        <option value="Allemagne">Allemagne </option>
        <option value="Andorre">Andorre </option>
        <option value="Angola">Angola </option>
        <option value="Anguilla">Anguilla </option>
        <option value="Arabie_Saoudite">Arabie_Saoudite </option>
        <option value="Argentine">Argentine </option>
        <option value="Armenie">Armenie </option>
        <option value="Australie">Australie </option>
        <option value="Autriche">Autriche </option>
        <option value="Azerbaidjan">Azerbaidjan </option>
        <option value="Bahamas">Bahamas </option>
        <option value="Bangladesh">Bangladesh </option>
        <option value="Barbade">Barbade </option>
        <option value="Bahrein">Bahrein </option>
        <option value="Belgique">Belgique </option>
        <option value="Belize">Belize </option>
        <option value="Benin">Benin </option>
        <option value="Bermudes">Bermudes </option>
        <option value="Bielorussie">Bielorussie </option>
        <option value="Bolivie">Bolivie </option>
        <option value="Botswana">Botswana </option>
        <option value="Bhoutan">Bhoutan </option>
        <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
        <option value="Bresil">Bresil </option>
        <option value="Brunei">Brunei </option>
        <option value="Bulgarie">Bulgarie </option>
        <option value="Burkina_Faso">Burkina_Faso </option>
        <option value="Burundi">Burundi </option>
        <option value="Caiman">Caiman </option>
        <option value="Cambodge">Cambodge </option>
        <option value="Cameroun">Cameroun </option>
        <option value="Canada">Canada </option>
        <option value="Canaries">Canaries </option>
        <option value="Cap_vert">Cap_Vert </option>
        <option value="Chili">Chili </option>
        <option value="Chine">Chine </option>
        <option value="Chypre">Chypre </option>
        <option value="Colombie">Colombie </option>
        <option value="Comores">Colombie </option>
        <option value="Congo">Congo </option>
        <option value="Congo_democratique">Congo_democratique </option>
        <option value="Cook">Cook </option>
        <option value="Coree_du_Nord">Coree_du_Nord </option>
        <option value="Coree_du_Sud">Coree_du_Sud </option>
        <option value="Costa_Rica">Costa_Rica </option>
        <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
        <option value="Croatie">Croatie </option>
        <option value="Cuba">Cuba </option>
        <option value="Danemark">Danemark </option>
        <option value="Djibouti">Djibouti </option>
        <option value="Dominique">Dominique </option>
        <option value="Egypte">Egypte </option>
        <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
        <option value="Equateur">Equateur </option>
        <option value="Erythree">Erythree </option>
        <option value="Espagne">Espagne </option>
        <option value="Estonie">Estonie </option>
        <option value="Etats_Unis">Etats_Unis </option>
        <option value="Ethiopie">Ethiopie </option>
        <option value="Falkland">Falkland </option>
        <option value="Feroe">Feroe </option>
        <option value="Fidji">Fidji </option>
        <option value="Finlande">Finlande </option>
        <option value="France">France </option>
        <option value="Gabon">Gabon </option>
        <option value="Gambie">Gambie </option>
        <option value="Georgie">Georgie </option>
        <option value="Ghana">Ghana </option>
        <option value="Gibraltar">Gibraltar </option>
        <option value="Grece">Grece </option>
        <option value="Grenade">Grenade </option>
        <option value="Groenland">Groenland </option>
        <option value="Guadeloupe">Guadeloupe </option>
        <option value="Guam">Guam </option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guernesey">Guernesey </option>
        <option value="Guinee">Guinee </option>
        <option value="Guinee_Bissau">Guinee_Bissau </option>
        <option value="Guinee equatoriale">Guinee_Equatoriale </option>
        <option value="Guyana">Guyana </option>
        <option value="Guyane_Francaise ">Guyane_Francaise </option>
        <option value="Haiti">Haiti </option>
        <option value="Hawaii">Hawaii </option>
        <option value="Honduras">Honduras </option>
        <option value="Hong_Kong">Hong_Kong </option>
        <option value="Hongrie">Hongrie </option>
        <option value="Inde">Inde </option>
        <option value="Indonesie">Indonesie </option>
        <option value="Iran">Iran </option>
        <option value="Iraq">Iraq </option>
        <option value="Irlande">Irlande </option>
        <option value="Islande">Islande </option>
        <option value="Israel">Israel </option>
        <option value="Italie">italie </option>
        <option value="Jamaique">Jamaique </option>
        <option value="Jan Mayen">Jan Mayen </option>
        <option value="Japon">Japon </option>
        <option value="Jersey">Jersey </option>
        <option value="Jordanie">Jordanie </option>
        <option value="Kazakhstan">Kazakhstan </option>
        <option value="Kenya">Kenya </option>
        <option value="Kirghizstan">Kirghizistan </option>
        <option value="Kiribati">Kiribati </option>
        <option value="Koweit">Koweit </option>
        <option value="Laos">Laos </option>
        <option value="Lesotho">Lesotho </option>
        <option value="Lettonie">Lettonie </option>
        <option value="Liban">Liban </option>
        <option value="Liberia">Liberia </option>
        <option value="Liechtenstein">Liechtenstein </option>
        <option value="Lituanie">Lituanie </option>
        <option value="Luxembourg">Luxembourg </option>
        <option value="Lybie">Lybie </option>
        <option value="Macao">Macao </option>
        <option value="Macedoine">Macedoine </option>
        <option value="Madagascar">Madagascar </option>
        <option value="Madère">Madère </option>
        <option value="Malaisie">Malaisie </option>
        <option value="Malawi">Malawi </option>
        <option value="Maldives">Maldives </option>
        <option value="Mali">Mali </option>
        <option value="Malte">Malte </option>
        <option value="Man">Man </option>
        <option value="Mariannes du Nord">Mariannes du Nord </option>
        <option value="Maroc">Maroc </option>
        <option value="Marshall">Marshall </option>
        <option value="Martinique">Martinique </option>
        <option value="Maurice">Maurice </option>
        <option value="Mauritanie">Mauritanie </option>
        <option value="Mayotte">Mayotte </option>
        <option value="Mexique">Mexique </option>
        <option value="Micronesie">Micronesie </option>
        <option value="Midway">Midway </option>
        <option value="Moldavie">Moldavie </option>
        <option value="Monaco">Monaco </option>
        <option value="Mongolie">Mongolie </option>
        <option value="Montserrat">Montserrat </option>
        <option value="Mozambique">Mozambique </option>
        <option value="Namibie">Namibie </option>
        <option value="Nauru">Nauru </option>
        <option value="Nepal">Nepal </option>
        <option value="Nicaragua">Nicaragua </option>
        <option value="Niger">Niger </option>
        <option value="Nigeria">Nigeria </option>
        <option value="Niue">Niue </option>
        <option value="Norfolk">Norfolk </option>
        <option value="Norvege">Norvege </option>
        <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
        <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
        <option value="Oman">Oman </option>
        <option value="Ouganda">Ouganda </option>
        <option value="Ouzbekistan">Ouzbekistan </option>
        <option value="Pakistan">Pakistan </option>
        <option value="Palau">Palau </option>
        <option value="Palestine">Palestine </option>
        <option value="Panama">Panama </option>
        <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
        <option value="Paraguay">Paraguay </option>
        <option value="Pays_Bas">Pays_Bas </option>
        <option value="Perou">Perou </option>
        <option value="Philippines">Philippines </option>
        <option value="Pologne">Pologne </option>
        <option value="Polynesie">Polynesie </option>
        <option value="Porto_Rico">Porto_Rico </option>
        <option value="Portugal">Portugal </option>
        <option value="Qatar">Qatar </option>
        <option value="Republique_Dominicaine">Republique_Dominicaine </option>
        <option value="Republique_Tcheque">Republique_Tcheque </option>
        <option value="Reunion">Reunion </option>
        <option value="Roumanie">Roumanie </option>
        <option value="Royaume_Uni">Royaume_Uni </option>
        <option value="Russie">Russie </option>
        <option value="Rwanda">Rwanda </option>
        <option value="Sahara Occidental">Sahara Occidental </option>
        <option value="Sainte_Lucie">Sainte_Lucie </option>
        <option value="Saint_Marin">Saint_Marin </option>
        <option value="Salomon">Salomon </option>
        <option value="Salvador">Salvador </option>
        <option value="Samoa_Occidentales">Samoa_Occidentales</option>
        <option value="Samoa_Americaine">Samoa_Americaine </option>
        <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
        <option value="Senegal">Senegal </option>
        <option value="Seychelles">Seychelles </option>
        <option value="Sierra Leone">Sierra Leone </option>
        <option value="Singapour">Singapour </option>
        <option value="Slovaquie">Slovaquie </option>
        <option value="Slovenie">Slovenie</option>
        <option value="Somalie">Somalie </option>
        <option value="Soudan">Soudan </option>
        <option value="Sri_Lanka">Sri_Lanka </option>
        <option value="Suede">Suede </option>
        <option value="Suisse">Suisse </option>
        <option value="Surinam">Surinam </option>
        <option value="Swaziland">Swaziland </option>
        <option value="Syrie">Syrie </option>
        <option value="Tadjikistan">Tadjikistan </option>
        <option value="Taiwan">Taiwan </option>
        <option value="Tonga">Tonga </option>
        <option value="Tanzanie">Tanzanie </option>
        <option value="Tchad">Tchad </option>
        <option value="Thailande">Thailande </option>
        <option value="Tibet">Tibet </option>
        <option value="Timor_Oriental">Timor_Oriental </option>
        <option value="Togo">Togo </option>
        <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
        <option value="Tristan da cunha">Tristan de cuncha </option>
        <option value="Tunisie">Tunisie </option>
        <option value="Turkmenistan">Turmenistan </option>
        <option value="Turquie">Turquie </option>
        <option value="Ukraine">Ukraine </option>
        <option value="Uruguay">Uruguay </option>
        <option value="Vanuatu">Vanuatu </option>
        <option value="Vatican">Vatican </option>
        <option value="Venezuela">Venezuela </option>
        <option value="Vierges_Americaines">Vierges_Americaines </option>
        <option value="Vierges_Britanniques">Vierges_Britanniques </option>
        <option value="Vietnam">Vietnam </option>
        <option value="Wake">Wake </option>
        <option value="Wallis et Futuma">Wallis et Futuma </option>
        <option value="Yemen">Yemen </option>
        <option value="Yougoslavie">Yougoslavie </option>
        <option value="Zambie">Zambie </option>
        <option value="Zimbabwe">Zimbabwe </option>
      </select>
      <label for="nationality">Nationalité :</label>
      <select name="nationality">
        <option value="null">NATIONALITÉ</option>
        <option value="AFG">Afghane</option>
        <option value="ALB">Albanaise</option>
        <option value="DZA">Algérienne</option>
        <option value="DEU">Allemande</option>
        <option value="USA">Americaine</option>
        <option value="AND">Andorrane</option>
        <option value="AGO">Angolaise</option>
        <option value="ATG">Antiguaise-et-Barbudienne</option>
        <option value="ARG">Argentine</option>
        <option value="ARM">Armenienne</option>
        <option value="AUS">Australienne</option>
        <option value="AUT">Autrichienne</option>
        <option value="AZE">Azerbaïdjanaise</option>
        <option value="BHS">Bahamienne</option>
        <option value="BHR">Bahreinienne</option>
        <option value="BGD">Bangladaise</option>
        <option value="BRB">Barbadienne</option>
        <option value="BEL">Belge</option>
        <option value="BLZ">Belizienne</option>
        <option value="BEN">Béninoise</option>
        <option value="BTN">Bhoutanaise</option>
        <option value="BLR">Biélorusse</option>
        <option value="MMR">Birmane</option>
        <option value="GNB">Bissau-Guinéenne</option>
        <option value="BOL">Bolivienne</option>
        <option value="BIH">Bosnienne</option>
        <option value="BWA">Botswanaise</option>
        <option value="BRA">Brésilienne</option>
        <option value="GBR">Britannique</option>
        <option value="BRN">Brunéienne</option>
        <option value="BGR">Bulgare</option>
        <option value="BFA">Burkinabée</option>
        <option value="BDI">Burundaise</option>
        <option value="KHM">Cambodgienne</option>
        <option value="CMR">Camerounaise</option>
        <option value="CAN">Canadienne</option>
        <option value="CPV">Cap-verdienne</option>
        <option value="CAF">Centrafricaine</option>
        <option value="CHL">Chilienne</option>
        <option value="CHN">Chinoise</option>
        <option value="CYP">Chypriote</option>
        <option value="COL">Colombienne</option>
        <option value="COM">Comorienne</option>
        <option value="COG">Congolaise</option>
        <option value="COD">Congolaise</option>
        <option value="COK">Cookienne</option>
        <option value="CRI">Costaricaine</option>
        <option value="HRV">Croate</option>
        <option value="CUB">Cubaine</option>
        <option value="DNK">Danoise</option>
        <option value="DJI">Djiboutienne</option>
        <option value="DOM">Dominicaine</option>
        <option value="DMA">Dominiquaise</option>
        <option value="EGY">Égyptienne</option>
        <option value="ARE">Émirienne</option>
        <option value="GNQ">Équato-guineenne</option>
        <option value="ECU">Équatorienne</option>
        <option value="ERI">Érythréenne</option>
        <option value="ESP">Espagnole</option>
        <option value="TLS">Est-timoraise</option>
        <option value="EST">Estonienne</option>
        <option value="ETH">Éthiopienne</option>
        <option value="FJI">Fidjienne</option>
        <option value="FIN">Finlandaise</option>
        <option value="FRA">Française</option>
        <option value="GAB">Gabonaise</option>
        <option value="GMB">Gambienne</option>
        <option value="GEO">Georgienne</option>
        <option value="GHA">Ghanéenne</option>
        <option value="GRD">Grenadienne</option>
        <option value="GTM">Guatémaltèque</option>
        <option value="GIN">Guinéenne</option>
        <option value="GUY">Guyanienne</option>
        <option value="HTI">Haïtienne</option>
        <option value="GRC">Hellénique</option>
        <option value="HND">Hondurienne</option>
        <option value="HUN">Hongroise</option>
        <option value="IND">Indienne</option>
        <option value="IDN">Indonésienne</option>
        <option value="IRQ">Irakienne</option>
        <option value="IRN">Iranienne</option>
        <option value="IRL">Irlandaise</option>
        <option value="ISL">Islandaise</option>
        <option value="ISR">Israélienne</option>
        <option value="ITA">Italienne</option>
        <option value="CIV">Ivoirienne</option>
        <option value="JAM">Jamaïcaine</option>
        <option value="JPN">Japonaise</option>
        <option value="JOR">Jordanienne</option>
        <option value="KAZ">Kazakhstanaise</option>
        <option value="KEN">Kenyane</option>
        <option value="KGZ">Kirghize</option>
        <option value="KIR">Kiribatienne</option>
        <option value="KNA">Kittitienne et Névicienne</option>
        <option value="KWT">Koweïtienne</option>
        <option value="LAO">Laotienne</option>
        <option value="LSO">Lesothane</option>
        <option value="LVA">Lettone</option>
        <option value="LBN">Libanaise</option>
        <option value="LBR">Libérienne</option>
        <option value="LBY">Libyenne</option>
        <option value="LIE">Liechtensteinoise</option>
        <option value="LTU">Lituanienne</option>
        <option value="LUX">Luxembourgeoise</option>
        <option value="MKD">Macédonienne</option>
        <option value="MYS">Malaisienne</option>
        <option value="MWI">Malawienne</option>
        <option value="MDV">Maldivienne</option>
        <option value="MDG">Malgache</option>
        <option value="MLI">Maliennes</option>
        <option value="MLT">Maltaise</option>
        <option value="MAR">Marocaine</option>
        <option value="MHL">Marshallaise</option>
        <option value="MUS">Mauricienne</option>
        <option value="MRT">Mauritanienne</option>
        <option value="MEX">Mexicaine</option>
        <option value="FSM">Micronésienne</option>
        <option value="MDA">Moldave</option>
        <option value="MCO">Monegasque</option>
        <option value="MNG">Mongole</option>
        <option value="MNE">Monténégrine</option>
        <option value="MOZ">Mozambicaine</option>
        <option value="NAM">Namibienne</option>
        <option value="NRU">Nauruane</option>
        <option value="NLD">Néerlandaise</option>
        <option value="NZL">Néo-Zélandaise</option>
        <option value="NPL">Népalaise</option>
        <option value="NIC">Nicaraguayenne</option>
        <option value="NGA">Nigériane</option>
        <option value="NER">Nigérienne</option>
        <option value="NIU">Niuéenne</option>
        <option value="PRK">Nord-coréenne</option>
        <option value="NOR">Norvégienne</option>
        <option value="OMN">Omanaise</option>
        <option value="UGA">Ougandaise</option>
        <option value="UZB">Ouzbéke</option>
        <option value="PAK">Pakistanaise</option>
        <option value="PLW">Palaosienne</option>
        <option value="PSE">Palestinienne</option>
        <option value="PAN">Panaméenne</option>
        <option value="PNG">Papouane-Néo-Guinéenne</option>
        <option value="PRY">Paraguayenne</option>
        <option value="PER">Péruvienne</option>
        <option value="PHL">Philippine</option>
        <option value="POL">Polonaise</option>
        <option value="PRT">Portugaise</option>
        <option value="QAT">Qatarienne</option>
        <option value="ROU">Roumaine</option>
        <option value="RUS">Russe</option>
        <option value="RWA">Rwandaise</option>
        <option value="LCA">Saint-Lucienne</option>
        <option value="SMR">Saint-Marinaise</option>
        <option value="VCT">Saint-Vincentaise et Grenadine</option>
        <option value="SLB">Salomonaise</option>
        <option value="SLV">Salvadorienne</option>
        <option value="WSM">Samoane</option>
        <option value="STP">Santoméenne</option>
        <option value="SAU">Saoudienne</option>
        <option value="SEN">Sénégalaise</option>
        <option value="SRB">Serbe</option>
        <option value="SYC">Seychelloise</option>
        <option value="SLE">Sierra-Léonaise</option>
        <option value="SGP">Singapourienne</option>
        <option value="SVK">Slovaque</option>
        <option value="SVN">Slovène</option>
        <option value="SOM">Somalienne</option>
        <option value="SDN">Soudanaise</option>
        <option value="LKA">Sri-Lankaise</option>
        <option value="ZAF">Sud-Africaine</option>
        <option value="KOR">Sud-Coréenne</option>
        <option value="SSD">Sud-Soudanaise</option>
        <option value="SWE">Suédoise</option>
        <option value="CHE">Suisse</option>
        <option value="SUR">Surinamaise</option>
        <option value="SWZ">Swazie</option>
        <option value="SYR">Syrienne</option>
        <option value="TJK">Tadjike</option>
        <option value="TZA">Tanzanienne</option>
        <option value="TCD">Tchadienne</option>
        <option value="CZE">Tchèque</option>
        <option value="THA">Thaïlandaise</option>
        <option value="TGO">Togolaise</option>
        <option value="TON">Tonguienne</option>
        <option value="TTO">Trinidadienne</option>
        <option value="TUN">Tunisienne</option>
        <option value="TKM">Turkmène</option>
        <option value="TUR">Turque</option>
        <option value="TUV">Tuvaluane</option>
        <option value="UKR">Ukrainienne</option>
        <option value="URY">Uruguayenne</option>
        <option value="VUT">Vanuatuane</option>
        <option value="VAT">Vaticane</option>
        <option value="VEN">Vénézuélienne</option>
        <option value="VNM">Vietnamienne</option>
        <option value="YEM">Yéménite</option>
        <option value="ZMB">Zambienne</option>
        <option value="ZWE">Zimbabwéenne</option>
      </select>
    </div>
    <div class="contacts">
      <label for="address">Adresse :</label>
      <input type="text" name="address" value="" required>
      <label for="email">Adresse mail :</label>
      <input type="email" name="email" value="" required>
      <label for="phone">Téléphone :</label>
      <input type="tel" name="phone" value="" required>
    </div>
    <div class="informations">
      <label for="diploma">Diplôme :</label>
      <select name="diploma">
        <option value="null">NIVEAU</option>
        <option value="none">Sans</option>
        <option value="bac">Bac</option>
        <option value="bac+2">Bac+2</option>
        <option value="bac+3/more">Bac+3 ou supérieur</option>
      </select>
      <label for="numberPE">Numéro pôle emploi</label>
      <input type="text" name="numberPE" value="" required>
      <label for="numberBadge">Nombre de palmes obtenues au canard :</label>
      <select name="numberBadge">
        <option value="null">NOMBRE</option>
        <?php
        for ($badge = 0; $badge < 7 ; $badge++) {
          ?>
          <option value="<?= $badge; ?>"><?= $badge; ?></option>
          <?php
        }
        ?>
      </select>
      <label for="codecademyLinks">Liens codecademy :</label>
      <input type="text" name="codecademyLinks" value="" required>
    </div>
    <div class="more">
      <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
      <textarea class='pimpMyTextarea' name="hero" rows="8" cols="80" required></textarea>
      <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</label>
      <textarea class='pimpMyTextarea' name="hack" rows="8" cols="80" required></textarea>
      <label for="exp">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? Si oui, remplissez le champ avec vos expériences, sinon veuillez renseigner le champ par 'aucune'.</label>
      <textarea class='pimpMyTextarea' name="exp" rows="8" cols="80" required></textarea>
    </div>
      <button class="button" type="submit" name="button">Envoi</button>
    </form>
    <?php
  } else {
    ?>
    <div class="result">
      <p><strong>Nom et prénom : </strong><?= $_POST['lastName'] . ' ' . $_POST['firstName']; ?></p>
      <p><strong>Date de naissance : </strong><?= $_POST['day'] . '/' . $_POST['month'] . '/' . $_POST['year']; ?></p>
      <p><strong>Pays de naissance : </strong><?= $_POST['PoB']; ?></p>
      <p><strong>Nationalité : </strong><?= $_POST['nationality']; ?></p>
      <p><strong>Adresse : </strong><?= $_POST['address']; ?></p>
      <p><strong>Adresse mail : </strong><?= $_POST['email']; ?></p>
      <p><strong>Téléphone : </strong><?= $_POST['phone']; ?></p>
      <p><strong>Diplôme :</strong><?= $_POST['diploma']; ?></p>
      <p><strong>Numéro pôle emploi : </strong><?= $_POST['numberPE']; ?></p>
      <p><strong>Nombre de palmes obtenues au canard : </strong><?= $_POST['numberBadge']; ?></p>
      <p><strong>Liens codecademy : </strong><?= $_POST['codecademyLinks']; ?></p>
      <p><strong>Si vous étiez un super héros/une super héroïne, vous seriez : </strong><?= $_POST['hero']; ?></p>
      <p><strong>Un de vos "hacks" : </strong><?= $_POST['hack']; ?></p>
      <?php
      if ($_POST['exp'] == 'aucune' || $_POST['exp'] == 'Aucune') {
        echo '';
      } else {
        ?>
        <p><strong>Votre/vos expérience(s) avec la programmation et/ou l'informatique : </strong><?= $_POST['exp']; ?></p>
        <?php
      }
       ?>
    </div>
    <?php
  }
  ?>
</body>
</html>
