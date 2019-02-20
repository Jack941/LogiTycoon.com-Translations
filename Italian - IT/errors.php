<?php
/*
------------------
Language:   English
Type:       Errors
------------------
*/

$langerrors = array(
//ERROR TYPES
"ERROR"          => "Errore",
"WARNING"        => "Attenzione",
"SUCCESS"        => "Successo",
"INFO"           => "Info",

//BASIC ERRORS
"ERROR_NOCOMP"               => "Non hai una compagnia. Creane una!",
"ERROR_NOCOMP2"              => "Non hai una compagnia.",
"ERROR_NOMONEY"              => "La tua compagnia non ha abbastanza soldi sul conto!",
"ERROR_INVALID_NUMBER"       => "Numero non valido!",
"ERROR_INVALID_COMP2"        => "Aspetta.. quale compagnia stai cercando?",
"ERROR_INVALID_COMP"         => "Questa compagnia non esiste!",
"ERROR_INVALID_CITY"         => "Città non valida!",
"ERROR_INVALID_COUNTRY"      => "Paese non valido!",
"ERROR_INVALID_OBJECT"       => "Oggetto non valido!",
"ERROR_LEVEL_TOO_LOW"        => "Non hai il livello richiesto!",
"ERROR_SELECTED"             => "Selezionato.",
"ERROR_INVALID_MEMBER"       => "Il membro non esiste!",
"ERROR_INVALID_REQUEST"      => "Richiesta non valida!",


//Premium
"ERROR_PURCHASE_COMPL"           => "Acquisto completato.",
"ERROR_PAY_ID_INVALID"           => "ID pagamento non valido.",
"ERROR_PAYMENT_COMPL"            => "Pagamento completato.",
"ERROR_PAYMENT_EXP"              => "Pagamento scaduto. Per favore riprova.",
"ERROR_PAYMENT_CANCELLED"        => "Hai annullato il pagamento.",
"ERROR_PAYMENT_NOT_ACCEPTED"     => "Pagamento non accettato.",
"ERROR_PREMIUM_BOUGHT"           => "Funzioni premium comprate.",
"ERROR_NOT_ENOUGH_CREDITS"       => "Non hai abbastanza crediti premium, comprali!",
"ERROR_PREMIUM_REQ"              => "Hai bisogno di un account premium per questo.",

//Video Reward
"ERROR_REWARD_CLAIMED"           => "Premio già richiesto!",
"ERROR_DAY_LIMIT_REACHED"        => "Limite giornaliero raggiunto!",

//User

    //General
    "ERROR_TUTORIAL_SKIPPED"     => "Hai saltato il tutorial.",

    //Messages
    "ERROR_MESSAGE_SENT"         => "Messaggio inviato.",
    "ERROR_BLACKLISTED"          => "Sei stato inserito nella blacklist da questo membro!",
    "ERROR_MSG_SUBJECT_SHORT"    => "Il soggetto non è abbastanza lungo!",
    "ERROR_MSG_CONTENT_SHORT"    => "Il contenuto non è abbastanza lungo!",
    "ERROR_INVALID_MESSAGE"      => "Messaggio non trovato!",
    "ERROR_MSG_NO_SUBJECT"       => "Sogetto mancante!",
    "ERROR_MSG_NO_RECEIVER"      => "Destinatario mancante!",
    "ERROR_MSG_NO_CONTENT"       => "Oggetto mancante!",

    //Profile
    "ERROR_CURRENT_PASSWORD"     => "Devi inserire la tua password attuale!",
    "ERROR_NEW_PASSWORD"         => "Devi inserire una nuova password!",
    "ERROR_PASSWORD_CHANGED"     => "Password cambiata!",
    "ERROR_DATABASE_ERROR"       => "Errore del database!",
    "ERROR_PASS_NOT_SAFE"        => "La nuova password non è abbastanza sicura! La password deve essere at least 6 characters and should contain a digit and a capital letter.",
    "ERROR_PASS_INCORRECT"       => "Password corrente sbagliata",
    "ERROR_TIMEZONE_CHANGED"     => "Fuso orario cambiato.",
    "ERROR_INVALID_TIMEZONE"     => "Fuso orario non valido!",

//Company + Corporation

    //General
    "ERROR_NAME_EXISTS"          => "Il nome già esiste!",
    "ERROR_NAME_SHORT"           => "Nome troppo corto! Il minimo è 6 caratteri!",
    "ERROR_NAME_SHORT2"          => "Nome troppo corto! Il minimo è 3 caratteri!",
    "ERROR_NAME_LONG"            => "Nome troppo lungo! Solo 18 caratteri permessi!",
    "ERROR_NAME_LONG2"           => "Nome troppo lungo! Solo 13 caratteri permessi!",
    "ERROR_NO_WAREHOUSE"         => "Non hai un magazzino! Comprane uno al negozio!",


    //Freights
    "ERROR_SPECIFY_FREIGHT"      => "Per favore specifica il carico che vuoi accettare.",
    "ERROR_INVALID_FREIGHT"      => "Il numero di questo carico non è valido.",
    "ERROR_INVALID_TR_LICENSE"   => "Non hai una licenza di trasporto valida per questo tipo di carico.",
    "ERROR_WAREHOUSE_FULL"       => "Il tuo magazziono è troppo piccolo. Aggiornalo o cancella altri carichi prima!",
    "ERROR_INV_OR_ACC_FREIGHT"   => "Questo carico non è valido qualcunaltro lo ha già accettato.",
    "ERROR_FREIGHT_ACCEPTED"     => "Hai già accettao questo carico.",

//Company

    //General
    "ERROR_INVALID_INVOICE"          => "Fattura non valida!",
    "ERROR_NAME_CHANGED"             => "Il nome è stato cambiato.",
    "ERROR_HQ_PART_CONCERN"          => "HQ può essere cambiato solo se non fai parte di una società.",
    "ERROR_HQ_CHANGE_DAYS"           => "HQ può essere cambiato una volta ogni 7 giorni.",
    "ERROR_HQ_CHANGED"               => "HQ aziendale cambiato.",
    "ERROR_MONEY_TRANSFERED"         => "Soldi trasferiti con successo!",
    "ERROR_LEVEL_BANK_ACC"           => "Devi essere al livello 7 per aprire un conto di risparmio!",
    "ERROR_NOMONEY_SAVINGS"          => "Non hai abbastanza soldi nel tuo conto di risaprmio!",
    "ERROR_NOBANKACC"                => "Non hai un conto di risparmio! Richiedine uno nel negozio!",
    "ERROR_COMPMADE"                 => "L'azienda è stata creata!",
    "ERROR_ALREADY_COMP"             => "Hai già un'azienda!",
    "ERROR_COMP_NOPROP"              => "L'azienda non ha edifici.",
    "ERROR_COMPSTILLINCONCERN"       => "La tua azienda fa parte di una società. Ritirati dalla società prima!",
    "ERROR_ACTIVE_MARKETSALE"        => "la tua azienda ha camion o rimorchi in vendita nel market. Cancella la vendita prima!",
    "ERROR_COMP_REMOVED"             => "La tua azienda è stata rimossa.",
    "ERROR_UPGRADE_TR_LICENSE"       => "Devi aggiornare la tua licenza di trasporto prima!",

    "ERROR_CANT_SPEEDUP_ACTION_TYPE" => "Non puoi velocizzare questo tipo di azioni.",

    //Garage & Warehouse
    "ERROR_NO_GARAGE"                => "Non hai un garage! Comprane uno al negozio prima!",
    "ERROR_GARAGE_FULL"              => "Il tuo garage è troppo piccolo. Aggiornalo!",

    "ERROR_WAREHOUSE_DOWNGRADED"     => "Hai ridotto il livello del tuo magazzino.",
    "ERROR_GARAGE_DOWNGRADED"        => "Hai ridotto il livello del tuo garage.",
    "ERROR_WAREHOUSE_UPGRADED"       => "Hai aumentato il livello del tuo magazzino.",
    "ERROR_GARAGE_UPGRADED"          => "Hai aumentato il livello del tuo garage.",
    "ERROR_DOWNGRADE_LEVEL1"         => "La riduzione non è possibile al livello 1!",

    //Transport License
    "ERROR_GET_PREV_LICENSES"        => "Devi prima ottenere la licenza precedente per prendere questa!",
    "ERROR_TR_LICENSE_REQ_LEVEL"     => "Devi avere un livello più alto per prendere questa licenza!",
    "ERROR_LICENSE_NOT_AVAILABLE"    => "Licenza non valida!",
    "ERROR_TR_LICENSE_UPGRADED"      => "Congratulazioni! Hai ottenuto la tua licenza di trasporto!",

    //Contracts
    "ERROR_CONTRACT_TECH_FEW"        => "l tuo contratto tecnico ti offre troppo pochi tecnici. Per favore selziona un altro contratto o aspetta finchè i tuoi tecnici non siano disponibili.",
    "ERROR_CONTRACT_NO_TECH"         => "Non hai un contratto tecnico attivo. Selezionane uno nel menù Contratti.",

    //Buy and Sell (Shop, etc.)
    "ERROR_OBJECT_BOUGHT"            => "Ogetto comprato.",
    "ERROR_OBJECT_SOLD"              => "Ogetto venduto.",
    "ERROR_MAX_OBJECTS_REACHED"      => "Raggiunti gli oggetti massimi consentiti!",
    "ERROR_SELL_DONT_HAVE"           => "Stai provando a vendere qualcosa che non hai..",
    "ERROR_TRUCK_BOUGHT"             => "Camion comprato!",
    "ERROR_TRAILER_BOUGHT"           => "Rimorchio comprato!",

    //Steal Fuel
    "ERROR_ST_FUEL_LEVEL_REQ"        => "Hai bisogno di un livello maggiore per rubare carburante!",
    "ERROR_ST_FUEL_OTHER_LEVEL_REQ"  => "La persona da cui vuoi rubare carburante, deve essere ad un livello più alto.",
    "ERROR_ST_FUEL_TOO_MUCH"         => "Non vuoi essere arrestato vero? Il furto di carburante è possibile 1 volta ogni ora!",
    "ERROR_ST_FUEL_FT_REQ"           => "Hai bisogno di un serbatoio di carburante. Compralo nel negozio!",
    "ERROR_ST_FUEL_PROTECTED_LOCK"   => "Peccato .. Il serbatoio del carburante è stato protetto da un lucchetto!",
    "ERROR_ST_FUEL_FAILED"           => "NON è il tuo momento fortunato.. Il proprietario dell'azienda ti ha visto!",
    "ERROR_ST_FUEL_SUCCESS"          => "Hai rubato carburante con successo da questa compagnia.",
    "ERROR_ST_FUEL_FT_EMPTY"         => "Peccato.. il serbatoio di questo camion era vuoto.",
    "ERROR_FUEL_TANK_FULL"           => "Il tuo serbatoio è pieno.",

    //Truck & Trailer Market
    "ERROR_TRUCK_SALE_ENDED"         => "La vendita di questo camion è stata cancellata!",
    "ERROR_TRAILER_SALE_ENDED"       => "La vendita di questo rimorchio è stata cancellata!",
    "ERROR_CANT_BUY_OWN_TRUCKS"      => "Non puoi comprare il tuo camion!",
    "ERROR_CANT_BUY_OWN_TRAILERS"    => "Non puoi comprare il tuo rimorchio!",
    "ERROR_LEVEL_MARKET"             => "Devi essere al livello 5 per operare nel market!",
    "ERROR_LEVEL_MARKET_SELL"        => "Devi essere al livello 5 per operare nel market!",
    "ERROR_MARKET_INVALID_PRICE"     => "Prezzo non valido. Inserire un prezzo tra:",
    "ERROR_TRUCK_MARKET_AVAILABLE"   => "Il tuo camion è adesso disponibile nel market.",
    "ERROR_TRAILER_MARKET_AVAILABLE" => "Il tuo rimorichio è adesso disponibile nel market.",

    //Fuelstation
    "ERROR_COUNTRY_NOT_RECEIVED"     => "The system did not receive the country you have chosen.",
    "ERROR_NO_TRUCKS_FOR_REFILL"     => "Your company does not have trucks in this country that need a refill!",
    "ERROR_TRUCK_NO_REFILL_NEEDED"   => "This truck does not need a refill right now.",
    "ERROR_NO_CONCERN_FUELSTATION"   => "No corporation fuelstation available in this country.",
    "ERROR_NO_CONCERN_FUEL"          => "Your corporation fuelstation does not have enough fuel available.",
    "ERROR_BUY_FUELTANK"             => "Please buy a fueltank in the shop first.",
    "ERROR_EMPTY_FUELTANK"           => "Your fueltank does not have enough fuel available. Try to steal some fuel from other companies to fill it up again.",
    "ERROR_TRUCK_NOT_REFUELING"      => "This truck is not refueling at the moment!",

    //Friends & Enemies
    "ERROR_FRIEND_DELETED"           => "Questa persona è stata cancellata dalla tua friendlist.",
    "ERROR_ENEMY_DELETED"            => "Questa persona è stata cancellata dalla tua blacklist.",
    "ERROR_ALREADY_FRIEND_ENEMY"     => "Questo membro è già tuo amico o nemico!",
    "ERROR_MAX_FRIENDS"              => "Numero massimo di amici raggiunto. Elimina qualcuno prima!",
    "ERROR_MAX_ENEMIES"              => "Numero massimo di nemici raggiunto. Elimina qualcuno prima!",
    "ERROR_FIEND_ADDED"              => "Questa persona è stata aggiunta alla tua friendlist.",
    "ERROR_ENEMY_ADDED"              => "Questa persona è stata aggiunta alla tua blacklist.",
    "ERROR_SELECT_FRIEND_ENEMY"      => "Per favore seleziona qualcuno!",

    //Freight
    "ERROR_CHOOSE_FREIGHT"           => "Devi selezionare un carico prima!",
    "ERROR_PREM_AUTO_SELECT"         => "Account premium richiesto per questa funzione!",
    "ERROR_FREIGHT_OTHER_COMP"       => "This freight does not belong to your company.",
    "ERROR_EMPL_SELECTED"            => "Impiegato selezionato.",
    "ERROR_TRAILER_SELECTED"         => "Rimorchio selzionato.",
    "ERROR_TRUCK_SELECTED"           => "Camion selezionato.",

    "ERROR_DETACH_ALL_FIRST"         => "You first have to detach everything from the freight (except the trailer).",
    "ERROR_FREIGHT_CANCELED"         => "Freight canceled.",
    "ERROR_FREIGHT_ALR_PROGRESS"     => "This freight is already in progress and cannot be canceled anymore!",

    "ERROR_FREIGHT_STATUS"           => "This freight does not have the right status to perform this action!",
    "ERROR_UNPAID_INVOICES"          => "Your company has unpaid invoices. Pay them first!",

    "ERROR_FREIGHT_READY"            => "Your freight is ready now!",
    "ERROR_SPEEDUP_MOMENT"           => "You cannot speed up the current stage of this freight!",

    //Insurance
    "ERROR_INSURANCE_LEVEL_REQ"      => "You will need a higher level to be able to change your insurance!",
    "ERROR_INSURANCE_MAX_CHANGES"    => "You can only change your insurance a few times a day!",

    //Trailer
    "ERROR_SELECT_TRAILER"           => "Per favore seleziona un rimorchio.",
    "ERROR_INVALID_TRAILER"          => "Il rimorchio non esiste!",
    "ERROR_TRAILER_EMPTY"            => "The trailer is still empty!",
    "ERROR_TRAILER_OTHER_COMP"       => "This trailer does not belong to your company!",
    "ERROR_TRAILER_DEP_CITY"         => "The trailer is not in the departure city!",
    "ERROR_TRAILER_DES_CITY"         => "The trailer is not in the correct city to start unloading!",
    "ERROR_INCOR_TYPE_TRAILER"       => "This trailer type cannot be used with this freight!",
    "ERROR_TRAILER_CANT_SELECT"      => "You cannot select a trailer at this freight stage.",
    "ERROR_TRAILER_COND_LOW"         => "The condition of this trailer is not good enough or your trailer is too old for a long trip!",
    "ERROR_TRAILER_OTHER_FREIGHT"    => "The trailer is selected for another freight!",
    "ERROR_TRAILER_OTHER_ACT"        => "The trailer is currently doing something else!",
    "ERROR_TRAILER_OTHER_ACT2"       => "The attached trailer is performing another action!",
    "ERROR_TRAILER_OTHER_ACT_FR"     => "The trailer is not in your garage at the moment. It is attached to a freight or doing another action.",
    "ERROR_TRAILER_OLD"              => "The trailer is too old for a long ride like this one!",
    "ERROR_TRAILER_SWITCHED"         => "Switched to another trailer.",
    "ERROR_TRAILER_STILL_LOADED"     => "The trailer is currently loaded. You have to unload your trailer first!",
    "ERROR_TRAILER_READY"            => "Your trailer is ready now!",
    "ERROR_TRAILER_REPAIR_INPOSSIBLE"=> "It is not possible to repair this trailer.",

        //Transfer
        "ERROR_TRAILER_ALREADY_CITY" => "The trailer already is in this city!",
        "ERROR_TRAILER_DRIVING_CITY" => "The trailer will be transported.",

        //Selling
        "ERROR_TRAILER_REP_BEF_SELL" => "Repair your trailer before selling it!",
        "ERROR_TRAILER_SOLD"         => "Trailer sold!",


    //Truck
    "ERROR_SELECT_TRUCK"             => "Please select a truck first.",
    "ERROR_INVALID_TRUCK"            => "The truck does not exist!",
    "ERROR_TRUCK_OTHER_COMP"         => "This truck does not belong to your company!",
    "ERROR_TRUCK_DEP_CITY"           => "The truck is not in the departure city!",
    "ERROR_TRUCK_FEW_HP"             => "The truck does not have enough horsepower for the trailer!",
    "ERROR_TRUCK_OTHER_ACT"          => "The truck is currently doing something else!",
    "ERROR_TRUCK_COND_LOW"           => "The condition of this truck is not good enough or your truck is too old for a long trip!!",
    "ERROR_TRUCK_LOW_FUEL"           => "The truck does not have enough fuel for this trip!",
    "ERROR_TRUCK_OLD"                => "The truck is too old for a long ride like this one!",
    "ERROR_TRUCK_OTHER_FREIGHT"      => "The truck is selected for another freight!",
    "ERROR_TRUCK_SWITCHED"           => "Switched to another truck.",
    "ERROR_TRUCK_OTHER_ACT2"         => "The attached truck is performing another action!",
    "ERROR_TRUCK_OTHER_ACT_FR"       => "The truck is not in your garage at the moment. It is attached to a freight or doing another action.",
    "ERROR_TRUCK_FREIGHT_STAGE"      => "You cannot select a truck at this freight stage.",
    "ERROR_TRUCK_READY"              => "Your truck is ready now!",
    "ERROR_TRUCK_REPAIR_INPOSSIBLE"  => "It is not possible to repair this truck.",
    "ERROR_TRUCK_HQ_REQ"             => "The truck has to be at your headquarter location to perform this action.",

        //Transfer
        "ERROR_TRUCK_ALREADY_CITY"   => "The truck already is in this city!",
        "ERROR_TRUCK_DRIVING_CITY"   => "The truck will be transported.",

        //Selling
        "ERROR_TRUCK_REP_BEF_SELL"   => "Repair your truck before selling it!",
        "ERROR_TRUCK_SOLD"           => "Truck sold!",

        //Fuel Tank Lock
        "ERROR_NO_FT_LOCK_AVAILABLE" => "You do not have a Fuel Tank Lock available. Buy one in the shop first!",
        "ERROR_TRUCK_ALREADY_FT_LOCK"=> "Your truck already has a Fuel Tank Lock.",
        "ERROR_TRUCK_NO_FT_LOCK"     => "Your truck does not have a Fuel Tank Lock.",

        //Navigation Unit
        "ERROR_NO_NAV_AVAILABLE"     => "You do not have a navigation unit available. Buy one in the shop first!",
        "ERROR_TRUCK_ALREADY_NAV"    => "Your truck already has a navigation unit.",
        "ERROR_TRUCK_NO_NAV"         => "Your truck does not have a navigation unit.",

    //Trucker
    "ERROR_SELECT_TRUCKER"           => "Please select a trucker first.",
    "ERROR_INVALID_TRUCKER"          => "The trucker does not exist!",
    "ERROR_TRUCKER_OTHER_COMP"       => "This trucker doesn't work for your company!",
    "ERROR_TRUCKER_DEP_CITY"         => "The trucker is not in the departure city!",
    "ERROR_TRUCKER_LICENSE_LOW"      => "The trucker does not have a valid license for this freight type!",
    "ERROR_TRUCKER_SICK"             => "The trucker is currently sick!",
    "ERROR_TRUCKER_NEEDS_SLEEP"      => "The trucker is falling asleep. Do something about it first!",
    "ERROR_TRUCKER_OTHER_ACT"        => "The trucker is currently doing something else!",
    "ERROR_TRUCKER_FREIGHT_STAGE"    => "You cannot select a trucker at this freight stage.",
    "ERROR_TRUCKER_OTHER_FREIGHT"    => "The trucker is selected for another freight!",
    "ERROR_TRUCKER_SWITCHED"         => "Switched to another trucker.",
    "ERROR_TRUCKER_OTHER_ACT2"       => "The attached trucker is performing another action!",

    //Warehouse Employee
    "ERROR_SELECT_WHEMPL"            => "Please select a Warehouse Employee first.",
    "ERROR_INVALID_WHEMPL"           => "The Warehouse Employee does not exist!",
    "ERROR_WHEMPL_OTHER_COMP"        => "This Warehouse Employee doesn't work for your company!",
    "ERROR_WHEMPL_CITY"              => "The Warehouse Employee is not in the correct city!",
    "ERROR_WHEMPL_DEP_CITY"          => "The Warehouse Employee is not in the departure city!",
    "ERROR_WHEMPL_SICK"              => "The Warehouse Employee is currently sick!",
    "ERROR_WHEMPL_OTHER_ACT"         => "The Warehouse Employee is currently doing something else!",
    "ERROR_WHEMPL_NEEDS_SLEEP"       => "The Warehouse Employee is falling asleep. Do something about it first!",
    "ERROR_WHEMPL_FREIGHT_STAGE"     => "You cannot select a Warehouse Employee at this freight stage.",
    "ERROR_WHEMPL_OTHER_FREIGHT"     => "The Warehouse Employee is selected for another freight!",
    "ERROR_WHEMPL_SWITCHED"          => "Switched to another Warehouse Employee.",
    "ERROR_WHEMPL_OTHER_ACT2"        => "The attached Warehouse Employee is performing another action!",

    //Manager
    "ERROR_SELECT_MGR"               => "Please select a Manager first.",
    "ERROR_SELECT_MGR_NEW"           => "Please select a Manager first. This is a new function in level 2!",
    "ERROR_SELECT_MGR_LEVEL"         => "You have to reach level 2 to select a manager!",
    "ERROR_MGR_OTHER_COMP"           => "This Manager doesn't work for your company!",
    "ERROR_MGR_OTHER_ACT"            => "The Manager is currently doing something else!",
    "ERROR_MGR_NEEDS_SLEEP"          => "The Manager is falling asleep. Do something about it first!",
    "ERROR_MGR_CANT_SELECT"          => "You cannot select a Manager at this freight stage.",
    "ERROR_INVALID_MGR"              => "This Manager does not exist!",
    "ERROR_MGR_OTHER_FREIGHT"        => "The manager is selected for another freight!",
    "ERROR_MGR_OTHER_ACT2"           => "The attached manager is performing another action!",
    "ERROR_MGR_SWITCHED"             => "Switched to another manager.",

    //Finances
    "ERROR_WAREHOUSE_FULL2"              => "Your warehouse is too small. Upgrade it first!",
    "ERROR_ACCOUNTANT_REQ"               => "You will need an accountant (available at level 3) to view the finances of your company!",
    "ERROR_PREM_FINANCE_DAYS"            => "You will need a premium account to see the finances of the last 14 days.",
    "ERROR_NO_DATA"                      => "No data available for the selected period.",

    //Contracts
    "ERROR_SPECIFY_CONTRACT"             => "Please specify the contract you want to accept.",
    "ERROR_INVALID_CONTRACT"             => "This contract is not valid.",
    "ERROR_CONTRACT_ACCEPTED"            => "Contract accepted.",

    //Employees
    "ERROR_SELECT_EMPLOYEE"              => "You have to select an employee!",
    "ERROR_INVALID_EMPLOYEE"             => "This employee does not exist!",
    "ERROR_INVALID_EMPLOYEE2"            => "Invalid employee!",
    "ERROR_EMPLOYEE_OTHER_COMP"          => "This employee doesn't work for your company!",
    "ERROR_EMPLOYEE_OTHER_ACTION"        => "This employee is doing something else!",
    "ERROR_EMPLOYEE_OTHER_FREIGHT"       => "This employee is attached to a freight!",
    "ERROR_FIRE_PREMIUM"                 => "It is not possible to fire a premium employee!",
    "ERROR_EMPLOYEE_FIRED"               => "You have now fired this employee.",
    "ERROR_EMPLOYEE_READY"               => "Your employee is ready now!",
    "ERROR_SPEEDUP_EMPL_RESTRIC"         => "You can't speed up this action!",
    "ERROR_EMPLOYEE_SICK"                => "This employee is currently sick!",
    "ERROR_EMPLOYEE_NO_SLEEP"            => "This employee does not need to sleep at the moment!",
    "ERROR_EMPLOYEE_SLEEP_STARTED"       => "This employee is now asleep.",
    "ERROR_EMPLOYEE_NEEDS_SLEEP"         => "This employee needs to sleep first!",
    "ERROR_EMPLOYEE_ALREADY_CITY"        => "The employee already is in this city!",
    "ERROR_EMPLOYEE_DRIVING_TRANSFER"    => "The employee is now driving to the city you have requested!",
    "ERROR_SPECIFY_START_CITY_EMPL"      => "Please specify a starting city for your employee.",
    "ERROR_SPECIFY_EMPLOYEE_HIRE"        => "Please specify the employee you want to hire.",

    "ERROR_MAX_TRUCKERS_REACHED"         => "You have exceeded the maximum number of Truckers of this type. Choose another one.",
    "ERROR_MAX_WHEMPL_REACHED"           => "You have exceeded the maximum number of Warehouse Employees of this type. Choose another one.",
    "ERROR_MAX_ACCOUNTANTS_REACHED"      => "You have exceeded the maximum number of Accountants.",
    "ERROR_MAX_HRMGRS_REACHED"           => "You have exceeded the maximum number of HR Managers.",
    "ERROR_MAX_TECHMGRS_REACHED"         => "You have exceeded the maximum number of Technical Managers.",
    "ERROR_MAX_MANAGERS_REACHED"         => "You have exceeded the maximum number of Managers of this type. Choose another one.",

    "ERROR_HIRE_MGR_LEVEL"               => "Hiring a Manager is only available when you have reached level 2.",
    "ERROR_HIRE_TECHMGR_LEVEL"           => "Hiring an Technical Manager is only available when you have reached level 19.",
    "ERROR_HIRE_HRMGR_LEVEL"             => "Hiring an HR Manager is only available when you have reached level 18.",
    "ERROR_HIRE_ACCOUNTANT_LEVEL"        => "Hiring an Accountant is only available when you have reached level 3.",

    "ERROR_HIRE_TRUCKER_SUCCESS"         => "You have hired this Trucker.",
    "ERROR_HIRE_WHEMPL_SUCCESS"          => "You have hired this WH Employee.",
    "ERROR_HIRE_MGR_SUCCESS"             => "You have hired this Manager.",
    "ERROR_HIRE_TECHMGR_SUCCESS"         => "You have hired this Technical Manager.",
    "ERROR_HIRE_HRMGR_SUCCESS"           => "You have hired this HR Manager.",
    "ERROR_HIRE_ACCOUNTANT_SUCCESS"      => "You have hired this Accountant.",

    "ERROR_UPGRADE_TRUCKERS_ONLY"        => "The upgrade option is only available for truckers!",
    "ERROR_ACHIEVE_PREV_LICENSE"         => "You first have to achieve the previous licenses to get this one!",
    "ERROR_INVALID_LICENSE"              => "Unavailable license!",
    "ERROR_LICENSE_UPGRADED"             => "License upgraded!",


//Corporation

    //General
    "ERROR_CONC_ALREADY_JOINED"      => "Your company already joined a corporation.",
    "ERROR_INVALID_CONCERN"          => "Corporation does not exist!",
    "ERROR_NOCONCERN"                => "Your company is not part of a corporation.",
    "ERROR_CONC_SELECT_MEMBER"       => "You have to select a member!",
    "ERROR_CONC_INVALID_MEMBER"      => "Invalid member!",
    "ERROR_MEMBER_NOT_IN_CONC"       => "This person is not part of your corporation!",
    "ERROR_CONC_NOT_OWNER"           => "You are not the owner of this corporation.",
    "ERROR_INSUF_RIGHTS"             => "Insufficient rights!",

    //Application
    "ERROR_CONC_ALREADY_APPLIED"     => "You already applied to this corporation! Be patient bro :)",
    "ERROR_CONC_MAX_REACHED"         => "Max amount of members for this corporation has already been reached.",
    "ERROR_CONC_MAX_REACHED2"        => "Max amount of members in this country has already been reached. Upgrade your office first!",
    "ERROR_NOT_ACCEPTING"            => "This corporation is not accepting new members at the moment.",
    "ERROR_LEVEL_CONCERN"            => "You have to be at level 6 to join a corporation.",
    "ERROR_CONC_APPLIED"             => "You have applied to this corporation. You will have to wait for the corporation owner to accept you.",
    "ERROR_CONC_INVALID_APPL"        => "Application for this corporation is not found.",
    "ERROR_CONC_APPL_CANCELED"       => "You have canceled your application to this corporation.",

    //Promote, Fire, Retire & Delete
    "ERROR_CONC_ACTIVE_MEMBERS"      => "Questa società ha ancora altri membri. Licenziateli!",
    "ERROR_CONC_ACTIVE_FREIGHTS"     => "Questa società ha ancora carichi attivi. Cancellateli o completateli!",
    "ERROR_CONC_DELETED"             => "Hai cancellato questa società.",
    "ERROR_CONC_FIRED_MEMBER"        => "Hai assunto questo membro.",
    "ERROR_CONC_PROMOTED_MEMBER"     => "Hai appena promosso questo membro.",
    "ERROR_NO_CONC_PREMIUM_PROM"     => "Questo membro non ha i requisiti per avviare una società.",
    "ERROR_OWNER_CANT_RETIRE"        => "Sei il proprietario di questa società. Non è possibile che tu te ne vada. Puoi invece eliminare la tua azienda.",
    "ERROR_CONC_OPEN_INVOICES2"      => "Hai ancora fattura da pagare con questa società. Pagale!",
    "ERROR_CONC_ACTIVE_FREIGHTS2"    => "Hai ancora carichi della società attivi. Cancellali o completali!",
    "ERROR_CONC_RETIRED"             => "Hai abbandonato questa società.",

    //Create
    "ERROR_CONC_REQUIREMENTS"        => "Non hai i requisiti per iniziare una società!",
    "ERROR_CONC_CREATED"             => "La società è stata creata!",
    "ERROR_INVALID_NAME"             => "Nome non valido!",

    //Properties
    "ERROR_INVALID_FUELST"           => "Stazione di servizio non valida!",
    "ERROR_FUELST_EXISTS"            => "Hai già una stazione di servizio in questo paese!",
    "ERROR_CONC_MONEY"               => "La tua società non ha abbastanza soldi!",
    "ERROR_FUELST_BOUGHT"            => "Stazione di servizio comprata.",
    "ERROR_FUELST_REFUELED"          => "Stazione di servizio rifornita.",
    "ERROR_FLPRICE_HIGH"             => "Il prezzo è troppo alto!",
    "ERROR_FLPRICE_SET"              => "Prezzo carburante settato.",
    "ERROR_CONC_LEVEL"               => "La tua società non ha il livello richiesto!",
    "ERROR_FUELST_UPGRADED"          => "Stazione di servizio aggiornata.",
    "ERROR_INVALID_OFFICE"           => "Ufficio non valido!",
    "ERROR_OFFICE_EXISTS"            => "Devi avere un ufficio in questo paese!",
    "ERROR_OFFICE_BOUGHT"            => "Ufficio comprato.",
    "ERROR_OFFICE_UPGRADED"          => "Ufficio aggiornato.",
    "ERROR_CONC_NO_PROPERTIES"       => "La società non ha edifici.",

    //Project
    "ERROR_INVALID_PROJECT"          => "Progetto non trovato!",
    "ERROR_PROJECT_NOT_AVAIL"        => "Il progetto non è più disponibile!",
    "ERROR_PROJECT_MAX_REACHED"      => "La tua società ha già due progetti aperti!",
    "ERROR_PROJECT_ACCEPTED"         => "Progetto accettato.",
    "ERROR_INCOMPLETE_PROJ_ACT"      => "Completa tutte le attività del progetto prima!",
    "ERROR_PROJECT_CANCELED"         => "Progetto cancellato.",
    "ERROR_PROJECT_FINISHED"         => "Progetto finito!",

    //Other
    "ERROR_CONC_DONATED"             => "Soldi donati con successo.",
    "ERROR_CONC_DONATION_SET"        => "Donazioni giornaliera settata!",
    "ERROR_GENERAL_MESSAGE_SAVED"    => "Il messaggio è stato salvato.",
    "ERROR_INVALID_LANGUAGE"         => "Lingua non valida.",
    "ERROR_LANGUAGE_CHANGED"         => "Lingua cambiata.",
    "ERROR_RIGHTS_CHANGED"           => "Rights changed."
);
?>
