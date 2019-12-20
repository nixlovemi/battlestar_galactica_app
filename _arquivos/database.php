<?php
/*
 - 10 Personagens
 - 70 Crise
 - 16 Lealdade
 - 17 Quorum
 - 5 Super Crise
 - 1 Presidente
 - 1 Almirante
 - 21 Perícia: Liderança
 - 21 Perícia: Tática
 - 21 Perícia: Política
 - 21 Perícia: Pilotagem
 - 21 Perícia: Engenharia
 - 22 Destino
 - 1 Carta Kobol
 - Tabuleiro
*/

// ===============================================
$arrCarta = [];
$arrCarta[] = array(
  "nome"     => 'Almirante',
  "nome_eng" => 'Admiral',
  "tipo"     => 'admiral',
  "subtipo"  => '',
  "path_img" => 'admiral/Admiral.png',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => '"Chief" Galen Tyrol',
  "nome_eng" => '"Chief" Galen Tyrol',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Chief_Galen_Tyrol.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Gaius Baltar',
  "nome_eng" => 'Gaius Baltar',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Gaius_Baltar.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Kara "Starbuck" Thrace',
  "nome_eng" => 'Kara "Starbuck" Thrace',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Kara_Starbuck_Thrace.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Karl "Helo" Agathon',
  "nome_eng" => 'Karl "Helo" Agathon',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Karl_Helo_Agathon.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Laura Roslin',
  "nome_eng" => 'Laura Roslin',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Laura_Roslin.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Lee "Apollo" Adama',
  "nome_eng" => 'Lee "Apollo" Adama',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Lee_Apollo_Adama.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Saul Tigh',
  "nome_eng" => 'Saul Tigh',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Saul_Tigh.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Sharon "Boomer" Valerii',
  "nome_eng" => 'Sharon "Boomer" Valerii',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Sharon_Boomer_Valerii.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Tom Zarek',
  "nome_eng" => 'Tom Zarek',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/Tom_Zarek.jpg',
);
$arrCarta[] = array(
  "nome"     => 'William Adama',
  "nome_eng" => 'William Adama',
  "tipo"     => 'character',
  "subtipo"  => '',
  "path_img" => 'character/William_Adama.jpg',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => 'Acusação de Traição',
  "nome_eng" => 'A Traitor Accused',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/A_Traitor_Accused.png',
);
$arrCarta[] = array(
  "nome"     => 'Almirante Sob Cobrança',
  "nome_eng" => 'Admiral Grilled',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Admiral_Grilled.png',
);
$arrCarta[] = array(
  "nome"     => 'Emboscada',
  "nome_eng" => 'Ambush ',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Ambush.png',
);
$arrCarta[] = array(
  "nome"     => 'Análise da Nave Inimiga',
  "nome_eng" => 'Analyze Enemy Fighter',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Analyze_Enemy_Fighter.png',
);
$arrCarta[] = array(
  "nome"     => 'Cerco',
  "nome_eng" => 'Besieged',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Besieged.png',
);
$arrCarta[] = array(
  "nome"     => 'Abordagem',
  "nome_eng" => 'Boarding Parties',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Boarding_Parties.png',
);
$arrCarta[] = array(
  "nome"     => 'Ameaça de Bomba',
  "nome_eng" => 'Bomb Threat',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Bomb_Threat.png',
);
$arrCarta[] = array(
  "nome"     => 'Detector Cylon Contruído',
  "nome_eng" => 'Build Cylon Detector',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Build_Cylon_Detector.png',
);
$arrCarta[] = array(
  "nome"     => 'Dia Colonial',
  "nome_eng" => 'Colonial Day',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Colonial_Day.png',
);
$arrCarta[] = array(
  "nome"     => 'Acidente na Aterrissagem',
  "nome_eng" => 'Crash Landing',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Crash_Landing.png',
);
$arrCarta[] = array(
  "nome"     => 'Raider Danificado',
  "nome_eng" => 'Crippled Raider',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Crippled_Raider.png',
);
$arrCarta[] = array(
  "nome"     => 'Acusado de ser um Cylon',
  "nome_eng" => 'Cylon Accusation',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Cylon_Accusation.png',
);
$arrCarta[] = array(
  "nome"     => 'Procura por Cylons',
  "nome_eng" => 'Cylon Screenings',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Cylon_Screenings.png',
);
$arrCarta[] = array(
  "nome"     => 'Enxame Cylon',
  "nome_eng" => 'Cylon Swarm',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Cylon_Swarm.png',
);
$arrCarta[] = array(
  "nome"     => 'Central de Rastreamento Cylon',
  "nome_eng" => 'Cylon Tracking Device',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Cylon_Tracking_Device.png',
);
$arrCarta[] = array(
  "nome"     => 'Vírus Cylon Detectado',
  "nome_eng" => 'Cylon Virus',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Cylon_Virus.png',
);
$arrCarta[] = array(
  "nome"     => 'Lei Marcial Declarada',
  "nome_eng" => 'Declare Martial Law',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Declare_Martial_Law.png',
);
$arrCarta[] = array(
  "nome"     => 'Sabotagem Denunciada',
  "nome_eng" => 'Detector Sabotage',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Detector_Sabotage.png',
);
$arrCarta[] = array(
  "nome"     => 'Eleições Chegando',
  "nome_eng" => 'Elections Loom',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Elections_Loom.png',
);
$arrCarta[] = array(
  "nome"     => 'Escassez de Comida',
  "nome_eng" => 'Food Shortage',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Food_Shortage.png',
);
$arrCarta[] = array(
  "nome"     => 'Coação para Obtenção de Água',
  "nome_eng" => 'Forced Water Mining',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Forced_Water_Mining.png',
);
$arrCarta[] = array(
  "nome"     => 'Cumpridor da Profecia',
  "nome_eng" => 'Fullfiller of Prophecy',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Fullfiller_of_Prophecy.png',
);
$arrCarta[] = array(
  "nome"     => 'Culpado por Conspiração',
  "nome_eng" => 'Guilt by Collusion',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Guilt_by_Collusion.png',
);
$arrCarta[] = array(
  "nome"     => 'Acidente no Hangar',
  "nome_eng" => 'Guilt by Collusion',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Hanger_Accident.png',
);
$arrCarta[] = array(
  "nome"     => 'Ataque Pesado',
  "nome_eng" => 'Heavy Assault',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Heavy_Assault.png',
);
$arrCarta[] = array(
  "nome"     => 'Pronunciamento Público',
  "nome_eng" => 'Informing the Public',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Informing_the_Public.png',
);
$arrCarta[] = array(
  "nome"     => 'Ataque às Antenas',
  "nome_eng" => 'Jammed Assault',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Jammed_Assault.png',
);
$arrCarta[] = array(
  "nome"     => 'Falha no Computador do Salto',
  "nome_eng" => 'Jump Computer Failure',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Jump_Computer_Failure.png',
);
$arrCarta[] = array(
  "nome"     => 'Mantenha os Visitantes à Vista',
  "nome_eng" => 'Keep Tabs on Visitor',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Keep_Tabs_on_Visitor.png',
);
$arrCarta[] = array(
  "nome"     => 'Descoberta a Última Cidade da Superfície',
  "nome_eng" => 'Legendary Discovery',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Legendary_Discovery.png',
);
$arrCarta[] = array(
  "nome"     => 'Perda de um Amigo',
  "nome_eng" => 'Loss of a Friend',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Loss_of_a_Friend.png',
);
$arrCarta[] = array(
  "nome"     => 'Estoques Baixos',
  "nome_eng" => 'Low Supplies',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Low_Supplies.png',
);
$arrCarta[] = array(
  "nome"     => 'Teste Obrigatório',
  "nome_eng" => 'Mandatory Testing',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Mandatory_Testing.png',
);
$arrCarta[] = array(
  "nome"     => 'Explosivos G4 Desaparecidos',
  "nome_eng" => 'Missing G4 Explosives',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Missing_G4_Explosives.png',
);
$arrCarta[] = array(
  "nome"     => 'Rede de Computadores',
  "nome_eng" => 'Network Computers',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Network_Computers.png',
);
$arrCarta[] = array(
  "nome"     => 'Trabalhos Forçados',
  "nome_eng" => 'Prison Labor',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Prison_Labor.png',
);
$arrCarta[] = array(
  "nome"     => 'Rebelião de Prisioneiros',
  "nome_eng" => 'Prisoner Revolt',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Prisoner_Revolt.png',
);
$arrCarta[] = array(
  "nome"     => 'Ataque à Retaguarda',
  "nome_eng" => 'Raiding Party',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Raiding_Party.png',
);
$arrCarta[] = array(
  "nome"     => 'Renúncia Requisitada',
  "nome_eng" => 'Requested Resignation',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Requested_Resignation.png',
);
$arrCarta[] = array(
  "nome"     => 'Resgate aos Sobreviventes de Cáprica',
  "nome_eng" => 'Rescue Caprica Survivors',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Rescue_Caprica_Survivors.png',
);
$arrCarta[] = array(
  "nome"     => 'Missão de Resgate',
  "nome_eng" => 'Rescue Mission',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Rescue_Mission.png',
);
$arrCarta[] = array(
  "nome"     => 'Naves Cylons Próximas: Salve a Frota',
  "nome_eng" => 'Rescue the Fleet',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Rescue_the_Fleet.png',
);
$arrCarta[] = array(
  "nome"     => 'Descontentamento Civil: Provisões Negadas',
  "nome_eng" => 'Resistance',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Resistance.png',
);
$arrCarta[] = array(
  "nome"     => 'Escassez de Água: Distúrbios Civis',
  "nome_eng" => 'Riots',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Riots.png',
);
$arrCarta[] = array(
  "nome"     => 'Procurando por Combustível',
  "nome_eng" => 'Scouting for Fuel',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Scouting_for_Fuel.png',
);
$arrCarta[] = array(
  "nome"     => 'Procurando por Água',
  "nome_eng" => 'Scouting for Water',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Scouting_for_Water.png',
);
$arrCarta[] = array(
  "nome"     => 'Quebra de Segurança',
  "nome_eng" => 'Security Breach',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Security_Breach.png',
);
$arrCarta[] = array(
  "nome"     => 'Equipe de Inspeção Enviada',
  "nome_eng" => 'Send Survey Team',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Send_Survey_Team.png',
);
$arrCarta[] = array(
  "nome"     => 'Pilotos Exaustos',
  "nome_eng" => 'Sleep Deprivation',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Sleep_Deprivation.png',
);
$arrCarta[] = array(
  "nome"     => 'Flanqueado',
  "nome_eng" => 'Surrounded',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Surrounded.png',
);
$arrCarta[] = array(
  "nome"     => 'Investida Tática',
  "nome_eng" => 'Tactical Strike',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Tactical_Strike.png',
);
$arrCarta[] = array(
  "nome"     => 'Homem-Bomba',
  "nome_eng" => 'Terrorist Bomber',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Terrorist_Bomber.png',
);
$arrCarta[] = array(
  "nome"     => 'Investigações de Terrorismo',
  "nome_eng" => 'Terrorist Investigations',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Terrorist_Investigations.png',
);
$arrCarta[] = array(
  "nome"     => 'Nave de Transporte Olympic',
  "nome_eng" => 'The Olympic Carrier',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/The_Olympic_Carrier.png',
);
$arrCarta[] = array(
  "nome"     => 'Trinta-e-Três',
  "nome_eng" => 'Thirty Three',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Thirty_Three.png',
);
$arrCarta[] = array(
  "nome"     => 'Reunião Imprevista',
  "nome_eng" => 'Unexpected Reunion',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Unexpected_Reunion.png',
);
$arrCarta[] = array(
  "nome"     => 'Nave não Identificada',
  "nome_eng" => 'Unidentified Ship',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Unidentified_Ship.png',
);
$arrCarta[] = array(
  "nome"     => 'Sabotagem nos Reservatórios de Água',
  "nome_eng" => 'Water Sabotaged',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Water_Sabotaged.png',
);
$arrCarta[] = array(
  "nome"     => 'Escassez de Água',
  "nome_eng" => 'Water Shortage',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Water_Shortage.png',
);
$arrCarta[] = array(
  "nome"     => 'Explosão na Sala das Armas',
  "nome_eng" => 'Weapon Malfunction',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Weapon_Malfunction.png',
);
$arrCarta[] = array(
  "nome"     => 'Tumulto Civil na Caça aos Cylons',
  "nome_eng" => 'Witch Hunt',
  "tipo"     => 'crisis',
  "subtipo"  => '',
  "path_img" => 'crisis/Witch_Hunt.png',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => 'Campo de Asteróides',
  "nome_eng" => 'Asteroid Field',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Asteroid_Field.png',
);
$arrCarta[] = array(
  "nome"     => 'Planeta Estéril',
  "nome_eng" => 'Barren Planet',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Barren_Planet.png',
);
$arrCarta[] = array(
  "nome"     => 'Emboscada Cylon',
  "nome_eng" => 'Cylon Ambush',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Cylon_Ambush.png',
);
$arrCarta[] = array(
  "nome"     => 'Refinaria Cylon',
  "nome_eng" => 'Cylon Refinery',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Cylon_Refinery.png',
);
$arrCarta[] = array(
  "nome"     => 'Espaço Profundo',
  "nome_eng" => 'Deep Space',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Deep_Space.png',
);
$arrCarta[] = array(
  "nome"     => 'Lua Deserta',
  "nome_eng" => 'Desolate Moon',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Desolate_Moon.png',
);
$arrCarta[] = array(
  "nome"     => 'Lua de Gelo',
  "nome_eng" => 'Icy Moon',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Icy_Moon.png',
);
$arrCarta[] = array(
  "nome"     => 'Ancoradouro Ragnar',
  "nome_eng" => 'Ragnar Anchorage',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Ragnar_Anchorage.png',
);
$arrCarta[] = array(
  "nome"     => 'Planeta Remoto',
  "nome_eng" => 'Remote Planet',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Remote_Planet.png',
);
$arrCarta[] = array(
  "nome"     => 'Planeta Tylium',
  "nome_eng" => 'Tylium Planet',
  "tipo"     => 'destination',
  "subtipo"  => '',
  "path_img" => 'destination/Tylium_Planet.png',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => 'Reparos',
  "nome_eng" => 'Repair',
  "tipo"     => 'skill',
  "subtipo"  => 'engineering',
  "path_img" => 'skill/engineering/Repair.png',
);
$arrCarta[] = array(
  "nome"     => 'Pesquisa Científica',
  "nome_eng" => 'Scientific Research',
  "tipo"     => 'skill',
  "subtipo"  => 'engineering',
  "path_img" => 'skill/engineering/Scientific_Research.png',
);
$arrCarta[] = array(
  "nome"     => 'Declaração Emergencial',
  "nome_eng" => 'Declare Emergency',
  "tipo"     => 'skill',
  "subtipo"  => 'leadership',
  "path_img" => 'skill/leadership/Declare_Emergency.png',
);
$arrCarta[] = array(
  "nome"     => 'Ordem Executiva',
  "nome_eng" => 'Executive Order',
  "tipo"     => 'skill',
  "subtipo"  => 'leadership',
  "path_img" => 'skill/leadership/Executive_Order.png',
);
$arrCarta[] = array(
  "nome"     => 'Manobras Evasivas',
  "nome_eng" => 'Evasive Maneuvers',
  "tipo"     => 'skill',
  "subtipo"  => 'piloting',
  "path_img" => 'skill/piloting/Evasive_Maneuvers.png',
);
$arrCarta[] = array(
  "nome"     => 'Máximo Poder de Fogo',
  "nome_eng" => 'Maximum Firepower',
  "tipo"     => 'skill',
  "subtipo"  => 'piloting',
  "path_img" => 'skill/piloting/Maximum_Firepower.png',
);
$arrCarta[] = array(
  "nome"     => 'Poder Consolidado',
  "nome_eng" => 'Consolidate Power',
  "tipo"     => 'skill',
  "subtipo"  => 'politics',
  "path_img" => 'skill/politics/Consolidate_Power.png',
);
$arrCarta[] = array(
  "nome"     => 'Comitê de Investigação',
  "nome_eng" => 'Investigative Committee',
  "tipo"     => 'skill',
  "subtipo"  => 'politics',
  "path_img" => 'skill/politics/Investigative_Committee.png',
);
$arrCarta[] = array(
  "nome"     => 'Nave de Reconhecimento',
  "nome_eng" => 'Launch Scout',
  "tipo"     => 'skill',
  "subtipo"  => 'tactics',
  "path_img" => 'skill/tactics/Launch_Scout.png',
);
$arrCarta[] = array(
  "nome"     => 'Planejamento Estratégico',
  "nome_eng" => 'Strategic Planning',
  "tipo"     => 'skill',
  "subtipo"  => 'tactics',
  "path_img" => 'skill/tactics/Strategic_Planning.png',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => 'Administração',
  "nome_eng" => 'Administration',
  "tipo"     => 'location',
  "subtipo"  => 'colonial_one',
  "path_img" => 'location/colonial_one/Colonial_One_Administration.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Gabinete do Presidente',
  "nome_eng" => 'Presidents Office',
  "tipo"     => 'location',
  "subtipo"  => 'colonial_one',
  "path_img" => 'location/colonial_one/Colonial_One_Presidents_Office.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Sala de Imprensa',
  "nome_eng" => 'Press Room',
  "tipo"     => 'location',
  "subtipo"  => 'colonial_one',
  "path_img" => 'location/colonial_one/Colonial_One_Press_Room.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Caprica',
  "nome_eng" => 'Caprica',
  "tipo"     => 'location',
  "subtipo"  => 'cylon',
  "path_img" => 'location/cylon/Cylon_Caprica.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Frota Cylon',
  "nome_eng" => 'Cylon Fleet',
  "tipo"     => 'location',
  "subtipo"  => 'cylon',
  "path_img" => 'location/cylon/Cylon_Cylon_Fleet.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Frota Humana',
  "nome_eng" => 'Human Fleet',
  "tipo"     => 'location',
  "subtipo"  => 'cylon',
  "path_img" => 'location/cylon/Cylon_Human_Fleet.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Nave da Ressurreição',
  "nome_eng" => 'Resurrection Ship',
  "tipo"     => 'location',
  "subtipo"  => 'cylon',
  "path_img" => 'location/cylon/Cylon_Resurrection_Ship.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Gabinete do Almirante',
  "nome_eng" => 'Admirals Quarters',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Admirals_Quarters.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Arsenal',
  "nome_eng" => 'Armory',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Armory.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Detenção',
  "nome_eng" => 'Brig',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Brig.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Sala de Comando',
  "nome_eng" => 'Command',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Command.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Sala de Comunicações',
  "nome_eng" => 'Communications',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Communications.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Controle de Hipersalto',
  "nome_eng" => 'FTL Control',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_FTL_Control.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Hangar',
  "nome_eng" => 'Hangar Deck',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Hangar_Deck.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Laboratório',
  "nome_eng" => 'Research Lab',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Research_Lab.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Efermaria',
  "nome_eng" => 'Sickbay',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Sickbay.jpg',
);
$arrCarta[] = array(
  "nome"     => 'Sala de Armas',
  "nome_eng" => 'Weapons Control',
  "tipo"     => 'location',
  "subtipo"  => 'galactica',
  "path_img" => 'location/galactica/Galactica_Weapons_Control.jpg',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => 'Você não é um Cylon',
  "nome_eng" => 'You Are Not a Cylon',
  "tipo"     => 'loyalty',
  "subtipo"  => '',
  "path_img" => 'loyalty/You_Are_Not_a_Cylon.png',
);
$arrCarta[] = array(
  "nome"     => 'Você é um Simpatizante',
  "nome_eng" => 'You Are a Sympathizer',
  "tipo"     => 'loyalty',
  "subtipo"  => '',
  "path_img" => 'loyalty/You_Are_a_Sympathizer.png',
);
$arrCarta[] = array(
  "nome"     => 'Você é um Cylon - Enfermaria',
  "nome_eng" => 'You Are a Cylon - Sickbay',
  "tipo"     => 'loyalty',
  "subtipo"  => '',
  "path_img" => 'loyalty/You_Are_a_Cylon_Sickbay.png',
);
$arrCarta[] = array(
  "nome"     => 'Você é um Cylon - Moral',
  "nome_eng" => 'You Are a Cylon - Morale',
  "tipo"     => 'loyalty',
  "subtipo"  => '',
  "path_img" => 'loyalty/You_Are_a_Cylon_Morale.png',
);
$arrCarta[] = array(
  "nome"     => 'Você é um Cylon - Galactica',
  "nome_eng" => 'You Are a Cylon - Galactica',
  "tipo"     => 'loyalty',
  "subtipo"  => '',
  "path_img" => 'loyalty/You_Are_a_Cylon_Galactica.png',
);
$arrCarta[] = array(
  "nome"     => 'Você é um Cylon - Detenção',
  "nome_eng" => 'You Are a Cylon - Brig',
  "tipo"     => 'loyalty',
  "subtipo"  => '',
  "path_img" => 'loyalty/You_Are_a_Cylon_Brig.png',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => 'Presidente',
  "nome_eng" => 'President',
  "tipo"     => 'president',
  "subtipo"  => '',
  "path_img" => 'president/President.png',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => 'Aceitando a Profecia',
  "nome_eng" => 'Accept Prophecy',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Accept_Prophecy.png',
);
$arrCarta[] = array(
  "nome"     => 'Ordem de Prisão',
  "nome_eng" => 'Arrest Order',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Arrest_Order.png',
);
$arrCarta[] = array(
  "nome"     => 'Delegar Poder',
  "nome_eng" => 'Assign Arbitrator',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Assign_Arbitrator.png',
);
$arrCarta[] = array(
  "nome"     => 'Designar Missionário',
  "nome_eng" => 'Assign Mission Specialist',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Assign_Mission_Specialist.png',
);
$arrCarta[] = array(
  "nome"     => 'Nomear Vice-Presidente',
  "nome_eng" => 'Assign Vice President',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Assign_Vice_President.png',
);
$arrCarta[] = array(
  "nome"     => 'Autorização para Uso de Força Bruta',
  "nome_eng" => 'Authorization of Brutal Force',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Authorization_of_Brutal_Force.png',
);
$arrCarta[] = array(
  "nome"     => 'Encorajando o Motim',
  "nome_eng" => 'Encourage Mutiny',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Encourage_Mutiny.png',
);
$arrCarta[] = array(
  "nome"     => 'Comida Racionada',
  "nome_eng" => 'Food Rationing',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Food_Rationing.png',
);
$arrCarta[] = array(
  "nome"     => 'Discurso Inspirador',
  "nome_eng" => 'Inspirational Speech',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Inspirational_Speech.png',
);
$arrCarta[] = array(
  "nome"     => 'Perdão Presidencial',
  "nome_eng" => 'Presidential Pardon',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Presidential_Pardon.png',
);
$arrCarta[] = array(
  "nome"     => 'Investigando Possíveis Cylons',
  "nome_eng" => 'Release Cylon Mugshots',
  "tipo"     => 'quorum',
  "subtipo"  => '',
  "path_img" => 'quorum/Release_Cylon_Mugshots.png',
);
// ===============================================
$arrCarta[] = array(
  "nome"     => 'Bomba na Colonial One',
  "nome_eng" => 'Bomb on Colony One',
  "tipo"     => 'super_crisis',
  "subtipo"  => '',
  "path_img" => 'super_crisis/Bomb_on_Colony_One.png',
);
$arrCarta[] = array(
  "nome"     => 'Invasores Cylon',
  "nome_eng" => 'Cylon Intruders',
  "tipo"     => 'super_crisis',
  "subtipo"  => '',
  "path_img" => 'super_crisis/Cylon_Intruders.png',
);
$arrCarta[] = array(
  "nome"     => 'Mobilização da Frota',
  "nome_eng" => 'Fleet Mobilization',
  "tipo"     => 'super_crisis',
  "subtipo"  => '',
  "path_img" => 'super_crisis/Fleet_Mobilization.png',
);
$arrCarta[] = array(
  "nome"     => 'Armas Nucleares Chegando',
  "nome_eng" => 'Inbound Nukes',
  "tipo"     => 'super_crisis',
  "subtipo"  => '',
  "path_img" => 'super_crisis/Inbound_Nukes.png',
);
$arrCarta[] = array(
  "nome"     => 'Ataque em Massa',
  "nome_eng" => 'Massive Assault',
  "tipo"     => 'super_crisis',
  "subtipo"  => '',
  "path_img" => 'super_crisis/Massive_Assault.png',
);
// ===============================================

echo json_encode($arrCarta);
