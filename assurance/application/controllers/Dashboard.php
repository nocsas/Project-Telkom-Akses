<?php

class Dashboard extends CI_Controller {

    public function __construct() {

        parent::__construct();
        
        is_logged_in();

        $this->load->model('nossa_model');
        $this->load->library('form_validation');
        $this->load->library('session');

    }



    public function index() {
        
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();
        

	// KBU

        $data["tknacstokbu"] = $this->nossa_model->getTekAcKbu();

        $data["tknasstokbu"] = $this->nossa_model->getTekAsKbu();



        $data["hvcmanordkbu"] = $this->nossa_model->getHvcManOrdKbu();

        $data["hvcmanclsdkbu"] = $this->nossa_model->getHvcManClsdKbu();

        $data["hvcmanpndgkbu"] = $this->nossa_model->getHvcManPndgKbu();

        

        $data["hvcnonmanordkbu"] = $this->nossa_model->getHvcNonManOrdKbu();

        $data["hvcnonmanclsdkbu"] = $this->nossa_model->getHvcNonManClsdKbu();

        $data["hvcnonmanpndgkbu"] = $this->nossa_model->getHvcNonManPndgKbu();

        

        $data["ttrmanordkbu"] = $this->nossa_model->getTtrManOrdKbu();

        $data["ttrmanclsdkbu"] = $this->nossa_model->getTtrManClsdKbu();

        $data["ttrmanpndgkbu"] = $this->nossa_model->getTtrManPndgKbu();

        

        $data["ttrnonmanordkbu"] = $this->nossa_model->getTtrNonManOrdKbu();

        $data["ttrnonmanclsdkbu"] = $this->nossa_model->getTtrNonManClsdKbu();

        $data["ttrnonmanpndgkbu"] = $this->nossa_model->getTtrNonManPndgKbu();

        

        $data["rgrordkbu"] = $this->nossa_model->getRgrOrdKbu();

        $data["rgrclsdkbu"] = $this->nossa_model->getRgrClsdKbu();

        $data["rgrpndgkbu"] = $this->nossa_model->getRgrPndgKbu();

        

        $data["sqmordkbu"] = $this->nossa_model->getSqmOrdKbu();

        $data["sqmclsdkbu"] = $this->nossa_model->getSqmClsdKbu();

        $data["sqmpndgkbu"] = $this->nossa_model->getSqmPndgKbu();

        

        $data["infraordkbu"] = $this->nossa_model->getInfraOrdKbu();

        $data["infraclsdkbu"] = $this->nossa_model->getInfraClsdKbu();

        $data["infrapndgkbu"] = $this->nossa_model->getInfraPndgKbu();



        $data["ordkbu"] = $data["hvcmanordkbu"] + $data["hvcnonmanordkbu"] + $data["ttrmanordkbu"] + $data["ttrnonmanordkbu"] + $data["rgrordkbu"] + $data["sqmordkbu"] + $data["infraordkbu"];

        $data["clsdkbu"] = $data["hvcmanclsdkbu"] + $data["hvcnonmanclsdkbu"] + $data["ttrmanclsdkbu"] + $data["ttrnonmanclsdkbu"] + $data["rgrclsdkbu"] + $data["sqmclsdkbu"] + $data["infraclsdkbu"];

        $data["pndgkbu"] = $data["hvcmanpndgkbu"] + $data["hvcnonmanpndgkbu"] + $data["ttrmanpndgkbu"] + $data["ttrnonmanpndgkbu"] + $data["rgrpndgkbu"] + $data["sqmpndgkbu"] + $data["infrapndgkbu"];

        $data["blnkkbu"] = $this->nossa_model->getBlnkKbu();

        $data["ttlkbu"] =  $data["ordkbu"] + $data["clsdkbu"] + $data["blnkkbu"] + $data["pndgkbu"];



        $data["clsttlkbu"] = ($data["clsdkbu"]!=0)?($data["clsdkbu"] / $data["ttlkbu"]) * 100:0;

        $data["prodtekkbu"] = ($data["tknasstokbu"]!=0)? $data["clsdkbu"] / $data["tknasstokbu"] :0;

        $data["avgtkttknkbu"] = ($data["tknasstokbu"]!=0)? $data["ttlkbu"] / $data["tknasstokbu"] :0;

        $data["sisatiktkbu"] = ($data["ttlkbu"]!=0)? (($data["ordkbu"] + $data["pndgkbu"] + $data["blnkkbu"]) / $data["ttlkbu"]) * 100 :0;

        
        ////////////////
        
        
        // SMN

        $data["tknacstosmn"] = $this->nossa_model->getTekAcSmn();

        $data["tknasstosmn"] = $this->nossa_model->getTekAsSmn();



        $data["hvcmanordsmn"] = $this->nossa_model->getHvcManOrdSmn();

        $data["hvcmanclsdsmn"] = $this->nossa_model->getHvcManClsdSmn();

        $data["hvcmanpndgsmn"] = $this->nossa_model->getHvcManPndgSmn();

        

        $data["hvcnonmanordsmn"] = $this->nossa_model->getHvcNonManOrdSmn();

        $data["hvcnonmanclsdsmn"] = $this->nossa_model->getHvcNonManClsdSmn();

        $data["hvcnonmanpndgsmn"] = $this->nossa_model->getHvcNonManPndgSmn();

        

        $data["ttrmanordsmn"] = $this->nossa_model->getTtrManOrdSmn();

        $data["ttrmanclsdsmn"] = $this->nossa_model->getTtrManClsdSmn();

        $data["ttrmanpndgsmn"] = $this->nossa_model->getTtrManPndgSmn();

        

        $data["ttrnonmanordsmn"] = $this->nossa_model->getTtrNonManOrdSmn();

        $data["ttrnonmanclsdsmn"] = $this->nossa_model->getTtrNonManClsdSmn();

        $data["ttrnonmanpndgsmn"] = $this->nossa_model->getTtrNonManPndgSmn();

        

        $data["rgrordsmn"] = $this->nossa_model->getRgrOrdSmn();

        $data["rgrclsdsmn"] = $this->nossa_model->getRgrClsdSmn();

        $data["rgrpndgsmn"] = $this->nossa_model->getRgrPndgSmn();

        

        $data["sqmordsmn"] = $this->nossa_model->getSqmOrdSmn();

        $data["sqmclsdsmn"] = $this->nossa_model->getSqmClsdSmn();

        $data["sqmpndgsmn"] = $this->nossa_model->getSqmPndgSmn();

        

        $data["infraordsmn"] = $this->nossa_model->getInfraOrdSmn();

        $data["infraclsdsmn"] = $this->nossa_model->getInfraClsdSmn();

        $data["infrapndgsmn"] = $this->nossa_model->getInfraPndgSmn();



        $data["ordsmn"] = $data["hvcmanordsmn"] + $data["hvcnonmanordsmn"] + $data["ttrmanordsmn"] + $data["ttrnonmanordsmn"] + $data["rgrordsmn"] + $data["sqmordsmn"] + $data["infraordsmn"];

        $data["clsdsmn"] = $data["hvcmanclsdsmn"] + $data["hvcnonmanclsdsmn"] + $data["ttrmanclsdsmn"] + $data["ttrnonmanclsdsmn"] + $data["rgrclsdsmn"] + $data["sqmclsdsmn"] + $data["infraclsdsmn"];

        $data["pndgsmn"] = $data["hvcmanpndgsmn"] + $data["hvcnonmanpndgsmn"] + $data["ttrmanpndgsmn"] + $data["ttrnonmanpndgsmn"] + $data["rgrpndgsmn"] + $data["sqmpndgsmn"] + $data["infrapndgsmn"];

        $data["blnksmn"] = $this->nossa_model->getBlnkSmn();

        $data["ttlsmn"] =  $data["ordsmn"] + $data["clsdsmn"] + $data["blnksmn"] + $data["pndgsmn"];



        $data["clsttlsmn"] = ($data["clsdsmn"]!=0)?($data["clsdsmn"] / $data["ttlsmn"]) * 100:0;

        $data["prodteksmn"] = ($data["tknasstosmn"]!=0)? $data["clsdsmn"] / $data["tknasstosmn"] :0;

        $data["avgtkttknsmn"] = ($data["tknasstosmn"]!=0)? $data["ttlsmn"] / $data["tknasstosmn"] :0;

        $data["sisatiktsmn"] = ($data["ttlsmn"]!=0)? (($data["ordsmn"] + $data["pndgsmn"] + $data["blnksmn"]) / $data["ttlsmn"]) * 100:0;


        //////////


        //////GOD//
        $data["tknacstogod"] = $this->nossa_model->getTekAcGod();

        $data["tknasstogod"] = $this->nossa_model->getTekAsGod();



        $data["hvcmanordgod"] = $this->nossa_model->getHvcManOrdGod();

        $data["hvcmanclsdgod"] = $this->nossa_model->getHvcManClsdGod();

        $data["hvcmanpndggod"] = $this->nossa_model->getHvcManPndgGod();

        

        $data["hvcnonmanordgod"] = $this->nossa_model->getHvcNonManOrdGod();

        $data["hvcnonmanclsdgod"] = $this->nossa_model->getHvcNonManClsdGod();

        $data["hvcnonmanpndggod"] = $this->nossa_model->getHvcNonManPndgGod();

        

        $data["ttrmanordgod"] = $this->nossa_model->getTtrManOrdGod();

        $data["ttrmanclsdgod"] = $this->nossa_model->getTtrManClsdGod();

        $data["ttrmanpndggod"] = $this->nossa_model->getTtrManPndgGod();

        

        $data["ttrnonmanordgod"] = $this->nossa_model->getTtrNonManOrdGod();

        $data["ttrnonmanclsdgod"] = $this->nossa_model->getTtrNonManClsdGod();

        $data["ttrnonmanpndggod"] = $this->nossa_model->getTtrNonManPndgGod();

        

        $data["rgrordgod"] = $this->nossa_model->getRgrOrdGod();

        $data["rgrclsdgod"] = $this->nossa_model->getRgrClsdGod();

        $data["rgrpndggod"] = $this->nossa_model->getRgrPndgGod();

        

        $data["sqmordgod"] = $this->nossa_model->getSqmOrdGod();

        $data["sqmclsdgod"] = $this->nossa_model->getSqmClsdGod();

        $data["sqmpndggod"] = $this->nossa_model->getSqmPndgGod();

        

        $data["infraordgod"] = $this->nossa_model->getInfraOrdGod();

        $data["infraclsdgod"] = $this->nossa_model->getInfraClsdGod();

        $data["infrapndggod"] = $this->nossa_model->getInfraPndgGod();



        $data["ordgod"] = $data["hvcmanordgod"] + $data["hvcnonmanordgod"] + $data["ttrmanordgod"] + $data["ttrnonmanordgod"] + $data["rgrordgod"] + $data["sqmordgod"] + $data["infraordgod"];

        $data["clsdgod"] = $data["hvcmanclsdgod"] + $data["hvcnonmanclsdgod"] + $data["ttrmanclsdgod"] + $data["ttrnonmanclsdgod"] + $data["rgrclsdgod"] + $data["sqmclsdgod"] + $data["infraclsdgod"];

        $data["pndggod"] = $data["hvcmanpndggod"] + $data["hvcnonmanpndggod"] + $data["ttrmanpndggod"] + $data["ttrnonmanpndggod"] + $data["rgrpndggod"] + $data["sqmpndggod"] + $data["infrapndggod"];

        $data["blnkgod"] = $this->nossa_model->getBlnkGod();

        $data["ttlgod"] =  $data["ordgod"] + $data["clsdgod"] + $data["blnkgod"] + $data["pndggod"];



        $data["clsttlgod"] = ($data["clsdgod"]!=0)?($data["clsdgod"] / $data["ttlgod"]) * 100:0;

        $data["prodtekgod"] = ($data["tknasstogod"]!=0)? $data["clsdgod"] / $data["tknasstogod"] :0;

        $data["avgtkttkngod"] = ($data["tknasstogod"]!=0)? $data["ttlgod"] / $data["tknasstogod"] :0;

        $data["sisatiktgod"] = ($data["ttlgod"]!=0)? (($data["ordgod"] + $data["pndggod"] + $data["blnkgod"]) / $data["ttlgod"]) * 100:0;


         //////////


        //////PKM//
        $data["tknacstopkm"] = $this->nossa_model->getTekAcPkm();

        $data["tknasstopkm"] = $this->nossa_model->getTekAsPkm();



        $data["hvcmanordpkm"] = $this->nossa_model->getHvcManOrdPkm();

        $data["hvcmanclsdpkm"] = $this->nossa_model->getHvcManClsdPkm();

        $data["hvcmanpndgpkm"] = $this->nossa_model->getHvcManPndgPkm();

        

        $data["hvcnonmanordpkm"] = $this->nossa_model->getHvcNonManOrdPkm();

        $data["hvcnonmanclsdpkm"] = $this->nossa_model->getHvcNonManClsdPkm();

        $data["hvcnonmanpndgpkm"] = $this->nossa_model->getHvcNonManPndgPkm();

        

        $data["ttrmanordpkm"] = $this->nossa_model->getTtrManOrdPkm();

        $data["ttrmanclsdpkm"] = $this->nossa_model->getTtrManClsdPkm();

        $data["ttrmanpndgpkm"] = $this->nossa_model->getTtrManPndgPkm();

        

        $data["ttrnonmanordpkm"] = $this->nossa_model->getTtrNonManOrdPkm();

        $data["ttrnonmanclsdpkm"] = $this->nossa_model->getTtrNonManClsdPkm();

        $data["ttrnonmanpndgpkm"] = $this->nossa_model->getTtrNonManPndgPkm();

        

        $data["rgrordpkm"] = $this->nossa_model->getRgrOrdPkm();

        $data["rgrclsdpkm"] = $this->nossa_model->getRgrClsdPkm();

        $data["rgrpndgpkm"] = $this->nossa_model->getRgrPndgPkm();

        

        $data["sqmordpkm"] = $this->nossa_model->getSqmOrdPkm();

        $data["sqmclsdpkm"] = $this->nossa_model->getSqmClsdPkm();

        $data["sqmpndgpkm"] = $this->nossa_model->getSqmPndgPkm();

        

        $data["infraordpkm"] = $this->nossa_model->getInfraOrdPkm();

        $data["infraclsdpkm"] = $this->nossa_model->getInfraClsdPkm();

        $data["infrapndgpkm"] = $this->nossa_model->getInfraPndgPkm();



        $data["ordpkm"] = $data["hvcmanordpkm"] + $data["hvcnonmanordpkm"] + $data["ttrmanordpkm"] + $data["ttrnonmanordpkm"] + $data["rgrordpkm"] + $data["sqmordpkm"] + $data["infraordpkm"];

        $data["clsdpkm"] = $data["hvcmanclsdpkm"] + $data["hvcnonmanclsdpkm"] + $data["ttrmanclsdpkm"] + $data["ttrnonmanclsdpkm"] + $data["rgrclsdpkm"] + $data["sqmclsdpkm"] + $data["infraclsdpkm"];

        $data["pndgpkm"] = $data["hvcmanpndgpkm"] + $data["hvcnonmanpndgpkm"] + $data["ttrmanpndgpkm"] + $data["ttrnonmanpndgpkm"] + $data["rgrpndgpkm"] + $data["sqmpndgpkm"] + $data["infrapndgpkm"];

        $data["blnkpkm"] = $this->nossa_model->getBlnkPkm();

        $data["ttlpkm"] =  $data["ordpkm"] + $data["clsdpkm"] + $data["blnkpkm"] + $data["pndgpkm"];



        $data["clsttlpkm"] = ($data["clsdpkm"]!=0)?($data["clsdpkm"] / $data["ttlpkm"]) * 100:0;

        $data["prodtekpkm"] = ($data["tknasstopkm"]!=0)? $data["clsdpkm"] / $data["tknasstopkm"] :0;

        $data["avgtkttknpkm"] = ($data["tknasstopkm"]!=0)? $data["ttlpkm"] / $data["tknasstopkm"] :0;

        $data["sisatiktpkm"] = ($data["ttlpkm"]!=0)? (($data["ordpkm"] + $data["pndgpkm"] + $data["blnkpkm"]) / $data["ttlpkm"]) * 100:0;


        //KLS
        $data["tknacstokls"] = $this->nossa_model->getTekAcKls();

        $data["tknasstokls"] = $this->nossa_model->getTekAsKls();



        $data["hvcmanordkls"] = $this->nossa_model->getHvcManOrdKls();

        $data["hvcmanclsdkls"] = $this->nossa_model->getHvcManClsdKls();

        $data["hvcmanpndgkls"] = $this->nossa_model->getHvcManPndgKls();

        

        $data["hvcnonmanordkls"] = $this->nossa_model->getHvcNonManOrdKls();

        $data["hvcnonmanclsdkls"] = $this->nossa_model->getHvcNonManClsdKls();

        $data["hvcnonmanpndgkls"] = $this->nossa_model->getHvcNonManPndgKls();

        

        $data["ttrmanordkls"] = $this->nossa_model->getTtrManOrdKls();

        $data["ttrmanclsdkls"] = $this->nossa_model->getTtrManClsdKls();

        $data["ttrmanpndgkls"] = $this->nossa_model->getTtrManPndgKls();

        

        $data["ttrnonmanordkls"] = $this->nossa_model->getTtrNonManOrdKls();

        $data["ttrnonmanclsdkls"] = $this->nossa_model->getTtrNonManClsdKls();

        $data["ttrnonmanpndgkls"] = $this->nossa_model->getTtrNonManPndgKls();

        

        $data["rgrordkls"] = $this->nossa_model->getRgrOrdKls();

        $data["rgrclsdkls"] = $this->nossa_model->getRgrClsdKls();

        $data["rgrpndgkls"] = $this->nossa_model->getRgrPndgKls();

        

        $data["sqmordkls"] = $this->nossa_model->getSqmOrdKls();

        $data["sqmclsdkls"] = $this->nossa_model->getSqmClsdKls();

        $data["sqmpndgkls"] = $this->nossa_model->getSqmPndgKls();

        

        $data["infraordkls"] = $this->nossa_model->getInfraOrdKls();

        $data["infraclsdkls"] = $this->nossa_model->getInfraClsdKls();

        $data["infrapndgkls"] = $this->nossa_model->getInfraPndgKls();



        $data["ordkls"] = $data["hvcmanordkls"] + $data["hvcnonmanordkls"] + $data["ttrmanordkls"] + $data["ttrnonmanordkls"] + $data["rgrordkls"] + $data["sqmordkls"] + $data["infraordkls"];

        $data["clsdkls"] = $data["hvcmanclsdkls"] + $data["hvcnonmanclsdkls"] + $data["ttrmanclsdkls"] + $data["ttrnonmanclsdkls"] + $data["rgrclsdkls"] + $data["sqmclsdkls"] + $data["infraclsdkls"];

        $data["pndgkls"] = $data["hvcmanpndgkls"] + $data["hvcnonmanpndgkls"] + $data["ttrmanpndgkls"] + $data["ttrnonmanpndgkls"] + $data["rgrpndgkls"] + $data["sqmpndgkls"] + $data["infrapndgkls"];

        $data["blnkkls"] = $this->nossa_model->getBlnkKls();

        $data["ttlkls"] =  $data["ordkls"] + $data["clsdkls"] + $data["blnkkls"] + $data["pndgkls"];



        $data["clsttlkls"] = ($data["clsdkls"]!=0)?($data["clsdkls"] / $data["ttlkls"]) * 100:0;

        $data["prodtekkls"] = ($data["tknasstokls"]!=0)? $data["clsdkls"] / $data["tknasstokls"] :0;

        $data["avgtkttknkls"] = ($data["tknasstokls"]!=0)? $data["ttlkls"] / $data["tknasstokls"] :0;

        $data["sisatiktkls"] = ($data["ttlkls"]!=0)? (($data["ordkls"] + $data["pndgkls"] + $data["blnkkls"]) / $data["ttlkls"]) * 100:0;

	
	//KGD
        $data["tknacstokgd"] = $this->nossa_model->getTekAcKgd();

        $data["tknasstokgd"] = $this->nossa_model->getTekAskgd();



        $data["hvcmanordkgd"] = $this->nossa_model->getHvcManOrdKgd();

        $data["hvcmanclsdkgd"] = $this->nossa_model->getHvcManClsdkgd();

        $data["hvcmanpndgkgd"] = $this->nossa_model->getHvcManPndgKgd();

        

        $data["hvcnonmanordkgd"] = $this->nossa_model->getHvcNonManOrdKgd();

        $data["hvcnonmanclsdkgd"] = $this->nossa_model->getHvcNonManClsdKgd();

        $data["hvcnonmanpndgkgd"] = $this->nossa_model->getHvcNonManPndgKgd();

        

        $data["ttrmanordkgd"] = $this->nossa_model->getTtrManOrdKgd();

        $data["ttrmanclsdkgd"] = $this->nossa_model->getTtrManClsdKgd();

        $data["ttrmanpndgkgd"] = $this->nossa_model->getTtrManPndgKgd();

        

        $data["ttrnonmanordkgd"] = $this->nossa_model->getTtrNonManOrdKgd();

        $data["ttrnonmanclsdkgd"] = $this->nossa_model->getTtrNonManClsdKgd();

        $data["ttrnonmanpndgkgd"] = $this->nossa_model->getTtrNonManPndgKgd();

        

        $data["rgrordkgd"] = $this->nossa_model->getRgrOrdKgd();

        $data["rgrclsdkgd"] = $this->nossa_model->getRgrClsdKgd();

        $data["rgrpndgkgd"] = $this->nossa_model->getRgrPndgKgd();

        

        $data["sqmordkgd"] = $this->nossa_model->getSqmOrdKgd();

        $data["sqmclsdkgd"] = $this->nossa_model->getSqmClsdKgd();

        $data["sqmpndgkgd"] = $this->nossa_model->getSqmPndgkgd();

        

        $data["infraordkgd"] = $this->nossa_model->getInfraOrdKgd();

        $data["infraclsdkgd"] = $this->nossa_model->getInfraClsdKgd();

        $data["infrapndgkgd"] = $this->nossa_model->getInfraPndgKgd();



        $data["ordkgd"] = $data["hvcmanordkgd"] + $data["hvcnonmanordkgd"] + $data["ttrmanordkgd"] + $data["ttrnonmanordkgd"] + $data["rgrordkgd"] + $data["sqmordkgd"] + $data["infraordkgd"];

        $data["clsdkgd"] = $data["hvcmanclsdkgd"] + $data["hvcnonmanclsdkgd"] + $data["ttrmanclsdkgd"] + $data["ttrnonmanclsdkgd"] + $data["rgrclsdkgd"] + $data["sqmclsdkgd"] + $data["infraclsdkgd"];

        $data["pndgkgd"] = $data["hvcmanpndgkgd"] + $data["hvcnonmanpndgkgd"] + $data["ttrmanpndgkgd"] + $data["ttrnonmanpndgkgd"] + $data["rgrpndgkgd"] + $data["sqmpndgkgd"] + $data["infrapndgkgd"];

        $data["blnkkgd"] = $this->nossa_model->getBlnkKgd();

        $data["ttlkgd"] =  $data["ordkgd"] + $data["clsdkgd"] + $data["blnkkgd"] + $data["pndgkgd"];



        $data["clsttlkgd"] = ($data["clsdkgd"]!=0)?($data["clsdkgd"] / $data["ttlkgd"]) * 100:0;

        $data["prodtekkgd"] = ($data["tknasstokgd"]!=0)? $data["clsdkgd"] / $data["tknasstokgd"] :0;

        $data["avgtkttknkgd"] = ($data["tknasstokgd"]!=0)? $data["ttlkgd"] / $data["tknasstokgd"] :0;

        $data["sisatiktkgd"] = ($data["ttlkgd"]!=0)? (($data["ordkgd"] + $data["pndgkgd"] + $data["blnkkgd"]) / $data["ttlkgd"]) * 100:0;

        

	//BBS
        $data["tknacstobbs"] = $this->nossa_model->getTekAcBbs();

        $data["tknasstobbs"] = $this->nossa_model->getTekAsBbs();



        $data["hvcmanordbbs"] = $this->nossa_model->getHvcManOrdBbs();

        $data["hvcmanclsdbbs"] = $this->nossa_model->getHvcManClsdBbs();

        $data["hvcmanpndgbbs"] = $this->nossa_model->getHvcManPndgBbs();

        

        $data["hvcnonmanordbbs"] = $this->nossa_model->getHvcNonManOrdBbs();

        $data["hvcnonmanclsdbbs"] = $this->nossa_model->getHvcNonManClsdBbs();

        $data["hvcnonmanpndgbbs"] = $this->nossa_model->getHvcNonManPndgBbs();

        

        $data["ttrmanordbbs"] = $this->nossa_model->getTtrManOrdBbs();

        $data["ttrmanclsdbbs"] = $this->nossa_model->getTtrManClsdBbs();

        $data["ttrmanpndgbbs"] = $this->nossa_model->getTtrManPndgBbs();

        

        $data["ttrnonmanordbbs"] = $this->nossa_model->getTtrNonManOrdBbs();

        $data["ttrnonmanclsdbbs"] = $this->nossa_model->getTtrNonManClsdBbs();

        $data["ttrnonmanpndgbbs"] = $this->nossa_model->getTtrNonManPndgBbs();

        

        $data["rgrordbbs"] = $this->nossa_model->getRgrOrdBbs();

        $data["rgrclsdbbs"] = $this->nossa_model->getRgrClsdBbs();

        $data["rgrpndgbbs"] = $this->nossa_model->getRgrPndgBbs();

        

        $data["sqmordbbs"] = $this->nossa_model->getSqmOrdBbs();

        $data["sqmclsdbbs"] = $this->nossa_model->getSqmClsdBbs();

        $data["sqmpndgbbs"] = $this->nossa_model->getSqmPndgBbs();

        

        $data["infraordbbs"] = $this->nossa_model->getInfraOrdBbs();

        $data["infraclsdbbs"] = $this->nossa_model->getInfraClsdBbs();

        $data["infrapndgbbs"] = $this->nossa_model->getInfraPndgBbs();



        $data["ordbbs"] = $data["hvcmanordbbs"] + $data["hvcnonmanordbbs"] + $data["ttrmanordbbs"] + $data["ttrnonmanordbbs"] + $data["rgrordbbs"] + $data["sqmordbbs"] + $data["infraordbbs"];

        $data["clsdbbs"] = $data["hvcmanclsdbbs"] + $data["hvcnonmanclsdbbs"] + $data["ttrmanclsdbbs"] + $data["ttrnonmanclsdbbs"] + $data["rgrclsdbbs"] + $data["sqmclsdbbs"] + $data["infraclsdbbs"];

        $data["pndgbbs"] = $data["hvcmanpndgbbs"] + $data["hvcnonmanpndgbbs"] + $data["ttrmanpndgbbs"] + $data["ttrnonmanpndgbbs"] + $data["rgrpndgbbs"] + $data["sqmpndgbbs"] + $data["infrapndgbbs"];

        $data["blnkbbs"] = $this->nossa_model->getBlnkBbs();

        $data["ttlbbs"] =  $data["ordbbs"] + $data["clsdbbs"] + $data["blnkbbs"] + $data["pndgbbs"];



        $data["clsttlbbs"] = ($data["clsdbbs"]!=0)?($data["clsdbbs"] / $data["ttlbbs"]) * 100:0;

        $data["prodtekbbs"] = ($data["tknasstobbs"]!=0)? $data["clsdbbs"] / $data["tknasstobbs"] :0;

        $data["avgtkttknbbs"] = ($data["tknasstobbs"]!=0)? $data["ttlbbs"] / $data["tknasstobbs"] :0;

        $data["sisatiktbbs"] = ($data["ttlbbs"]!=0)? (($data["ordbbs"] + $data["pndgbbs"] + $data["blnkbbs"]) / $data["ttlbbs"]) * 100:0;

	

	//KEN
        $data["tknacstoken"] = $this->nossa_model->getTekAcKen();

        $data["tknasstoken"] = $this->nossa_model->getTekAsKen();



        $data["hvcmanordken"] = $this->nossa_model->getHvcManOrdKen();

        $data["hvcmanclsdken"] = $this->nossa_model->getHvcManClsdKen();

        $data["hvcmanpndgken"] = $this->nossa_model->getHvcManPndgKen();

        

        $data["hvcnonmanordken"] = $this->nossa_model->getHvcNonManOrdKen();

        $data["hvcnonmanclsdken"] = $this->nossa_model->getHvcNonManClsdKen();

        $data["hvcnonmanpndgken"] = $this->nossa_model->getHvcNonManPndgKen();

        

        $data["ttrmanordken"] = $this->nossa_model->getTtrManOrdKen();

        $data["ttrmanclsdken"] = $this->nossa_model->getTtrManClsdKen();

        $data["ttrmanpndgken"] = $this->nossa_model->getTtrManPndgKen();

        

        $data["ttrnonmanordken"] = $this->nossa_model->getTtrNonManOrdKen();

        $data["ttrnonmanclsdken"] = $this->nossa_model->getTtrNonManClsdKen();

        $data["ttrnonmanpndgken"] = $this->nossa_model->getTtrNonManPndgKen();

        

        $data["rgrordken"] = $this->nossa_model->getRgrOrdKen();

        $data["rgrclsdken"] = $this->nossa_model->getRgrClsdKen();

        $data["rgrpndgken"] = $this->nossa_model->getRgrPndgKen();

        

        $data["sqmordken"] = $this->nossa_model->getSqmOrdKen();

        $data["sqmclsdken"] = $this->nossa_model->getSqmClsdKen();

        $data["sqmpndgken"] = $this->nossa_model->getSqmPndgKen();

        

        $data["infraordken"] = $this->nossa_model->getInfraOrdKen();

        $data["infraclsdken"] = $this->nossa_model->getInfraClsdKen();

        $data["infrapndgken"] = $this->nossa_model->getInfraPndgKen();



        $data["ordken"] = $data["hvcmanordken"] + $data["hvcnonmanordken"] + $data["ttrmanordken"] + $data["ttrnonmanordken"] + $data["rgrordken"] + $data["sqmordken"] + $data["infraordken"];

        $data["clsdken"] = $data["hvcmanclsdken"] + $data["hvcnonmanclsdken"] + $data["ttrmanclsdken"] + $data["ttrnonmanclsdken"] + $data["rgrclsdken"] + $data["sqmclsdken"] + $data["infraclsdken"];

        $data["pndgken"] = $data["hvcmanpndgken"] + $data["hvcnonmanpndgken"] + $data["ttrmanpndgken"] + $data["ttrnonmanpndgken"] + $data["rgrpndgken"] + $data["sqmpndgken"] + $data["infrapndgken"];

        $data["blnkken"] = $this->nossa_model->getBlnkKen();

        $data["ttlken"] =  $data["ordken"] + $data["clsdken"] + $data["blnkken"] + $data["pndgken"];



        $data["clsttlken"] = ($data["clsdken"]!=0)?($data["clsdken"] / $data["ttlken"]) * 100:0;

        $data["prodtekken"] = ($data["tknasstoken"]!=0)? $data["clsdken"] / $data["tknasstoken"] :0;

        $data["avgtkttknken"] = ($data["tknasstoken"]!=0)? $data["ttlken"] / $data["tknasstoken"] :0;

        $data["sisatiktken"] = ($data["ttlken"]!=0)? (($data["ordken"] + $data["pndgken"] + $data["blnkken"]) / $data["ttlken"]) * 100:0;


 	
	//PGR
        $data["tknacstopgr"] = $this->nossa_model->getTekAcPgr();

        $data["tknasstopgr"] = $this->nossa_model->getTekAsPgr();



        $data["hvcmanordpgr"] = $this->nossa_model->getHvcManOrdPgr();

        $data["hvcmanclsdpgr"] = $this->nossa_model->getHvcManClsdPgr();

        $data["hvcmanpndgpgr"] = $this->nossa_model->getHvcManPndgPgr();

        

        $data["hvcnonmanordpgr"] = $this->nossa_model->getHvcNonManOrdPgr();

        $data["hvcnonmanclsdpgr"] = $this->nossa_model->getHvcNonManClsdPgr();

        $data["hvcnonmanpndgpgr"] = $this->nossa_model->getHvcNonManPndgPgr();

        

        $data["ttrmanordpgr"] = $this->nossa_model->getTtrManOrdPgr();

        $data["ttrmanclsdpgr"] = $this->nossa_model->getTtrManClsdPgr();

        $data["ttrmanpndgpgr"] = $this->nossa_model->getTtrManPndgPgr();

        

        $data["ttrnonmanordpgr"] = $this->nossa_model->getTtrNonManOrdPgr();

        $data["ttrnonmanclsdpgr"] = $this->nossa_model->getTtrNonManClsdPgr();

        $data["ttrnonmanpndgpgr"] = $this->nossa_model->getTtrNonManPndgPgr();

        

        $data["rgrordpgr"] = $this->nossa_model->getRgrOrdPgr();

        $data["rgrclsdpgr"] = $this->nossa_model->getRgrClsdPgr();

        $data["rgrpndgpgr"] = $this->nossa_model->getRgrPndgPgr();

        

        $data["sqmordpgr"] = $this->nossa_model->getSqmOrdPgr();

        $data["sqmclsdpgr"] = $this->nossa_model->getSqmClsdPgr();

        $data["sqmpndgpgr"] = $this->nossa_model->getSqmPndgPgr();

        

        $data["infraordpgr"] = $this->nossa_model->getInfraOrdPgr();

        $data["infraclsdpgr"] = $this->nossa_model->getInfraClsdPgr();

        $data["infrapndgpgr"] = $this->nossa_model->getInfraPndgPgr();



        $data["ordpgr"] = $data["hvcmanordpgr"] + $data["hvcnonmanordpgr"] + $data["ttrmanordpgr"] + $data["ttrnonmanordpgr"] + $data["rgrordpgr"] + $data["sqmordpgr"] + $data["infraordpgr"];

        $data["clsdpgr"] = $data["hvcmanclsdpgr"] + $data["hvcnonmanclsdpgr"] + $data["ttrmanclsdpgr"] + $data["ttrnonmanclsdpgr"] + $data["rgrclsdpgr"] + $data["sqmclsdpgr"] + $data["infraclsdpgr"];

        $data["pndgpgr"] = $data["hvcmanpndgpgr"] + $data["hvcnonmanpndgpgr"] + $data["ttrmanpndgpgr"] + $data["ttrnonmanpndgpgr"] + $data["rgrpndgpgr"] + $data["sqmpndgpgr"] + $data["infrapndgpgr"];

        $data["blnkpgr"] = $this->nossa_model->getBlnkPgr();

        $data["ttlpgr"] =  $data["ordpgr"] + $data["clsdpgr"] + $data["blnkpgr"] + $data["pndgpgr"];



        $data["clsttlpgr"] = ($data["clsdpgr"]!=0)?($data["clsdpgr"] / $data["ttlpgr"]) * 100:0;

        $data["prodtekpgr"] = ($data["tknasstopgr"]!=0)? $data["clsdpgr"] / $data["tknasstopgr"] :0;

        $data["avgtkttknpgr"] = ($data["tknasstopgr"]!=0)? $data["ttlpgr"] / $data["tknasstopgr"] :0;

        $data["sisatiktpgr"] = ($data["ttlpgr"]!=0)? (($data["ordpgr"] + $data["pndgpgr"] + $data["blnkpgr"]) / $data["ttlpgr"]) * 100:0;


	
	//BTL
        $data["tknacstobtl"] = $this->nossa_model->getTekAcBtl();

        $data["tknasstobtl"] = $this->nossa_model->getTekAsBtl();



        $data["hvcmanordbtl"] = $this->nossa_model->getHvcManOrdBtl();

        $data["hvcmanclsdbtl"] = $this->nossa_model->getHvcManClsdBtl();

        $data["hvcmanpndgbtl"] = $this->nossa_model->getHvcManPndgBtl();

        

        $data["hvcnonmanordbtl"] = $this->nossa_model->getHvcNonManOrdBtl();

        $data["hvcnonmanclsdbtl"] = $this->nossa_model->getHvcNonManClsdBtl();

        $data["hvcnonmanpndgbtl"] = $this->nossa_model->getHvcNonManPndgBtl();

        

        $data["ttrmanordbtl"] = $this->nossa_model->getTtrManOrdBtl();

        $data["ttrmanclsdbtl"] = $this->nossa_model->getTtrManClsdBtl();

        $data["ttrmanpndgbtl"] = $this->nossa_model->getTtrManPndgBtl();

        

        $data["ttrnonmanordbtl"] = $this->nossa_model->getTtrNonManOrdBtl();

        $data["ttrnonmanclsdbtl"] = $this->nossa_model->getTtrNonManClsdBtl();

        $data["ttrnonmanpndgbtl"] = $this->nossa_model->getTtrNonManPndgBtl();

        

        $data["rgrordbtl"] = $this->nossa_model->getRgrOrdBtl();

        $data["rgrclsdbtl"] = $this->nossa_model->getRgrClsdBtl();

        $data["rgrpndgbtl"] = $this->nossa_model->getRgrPndgBtl();

        

        $data["sqmordbtl"] = $this->nossa_model->getSqmOrdBtl();

        $data["sqmclsdbtl"] = $this->nossa_model->getSqmClsdBtl();

        $data["sqmpndgbtl"] = $this->nossa_model->getSqmPndgBtl();

        

        $data["infraordbtl"] = $this->nossa_model->getInfraOrdBtl();

        $data["infraclsdbtl"] = $this->nossa_model->getInfraClsdBtl();

        $data["infrapndgbtl"] = $this->nossa_model->getInfraPndgBtl();



        $data["ordbtl"] = $data["hvcmanordbtl"] + $data["hvcnonmanordbtl"] + $data["ttrmanordbtl"] + $data["ttrnonmanordbtl"] + $data["rgrordbtl"] + $data["sqmordbtl"] + $data["infraordbtl"];

        $data["clsdbtl"] = $data["hvcmanclsdbtl"] + $data["hvcnonmanclsdbtl"] + $data["ttrmanclsdbtl"] + $data["ttrnonmanclsdbtl"] + $data["rgrclsdbtl"] + $data["sqmclsdbtl"] + $data["infraclsdbtl"];

        $data["pndgbtl"] = $data["hvcmanpndgbtl"] + $data["hvcnonmanpndgbtl"] + $data["ttrmanpndgbtl"] + $data["ttrnonmanpndgbtl"] + $data["rgrpndgbtl"] + $data["sqmpndgbtl"] + $data["infrapndgbtl"];

        $data["blnkbtl"] = $this->nossa_model->getBlnkBtl();

        $data["ttlbtl"] =  $data["ordbtl"] + $data["clsdbtl"] + $data["blnkbtl"] + $data["pndgbtl"];



        $data["clsttlbtl"] = ($data["clsdbtl"]!=0)?($data["clsdbtl"] / $data["ttlbtl"]) * 100:0;

        $data["prodtekbtl"] = ($data["tknasstobtl"]!=0)? $data["clsdbtl"] / $data["tknasstobtl"] :0;

        $data["avgtkttknbtl"] = ($data["tknasstobtl"]!=0)? $data["ttlbtl"] / $data["tknasstobtl"] :0;

        $data["sisatiktbtl"] = ($data["ttlbtl"]!=0)? (($data["ordbtl"] + $data["pndgbtl"] + $data["blnkbtl"]) / $data["ttlbtl"]) * 100:0;



	//WNS
        $data["tknacstowns"] = $this->nossa_model->getTekAcWns();

        $data["tknasstowns"] = $this->nossa_model->getTekAsWns();



        $data["hvcmanordwns"] = $this->nossa_model->getHvcManOrdWns();

        $data["hvcmanclsdwns"] = $this->nossa_model->getHvcManClsdWns();

        $data["hvcmanpndgwns"] = $this->nossa_model->getHvcManPndgWns();

        

        $data["hvcnonmanordwns"] = $this->nossa_model->getHvcNonManOrdWns();

        $data["hvcnonmanclsdwns"] = $this->nossa_model->getHvcNonManClsdWns();

        $data["hvcnonmanpndgwns"] = $this->nossa_model->getHvcNonManPndgWns();

        

        $data["ttrmanordwns"] = $this->nossa_model->getTtrManOrdWns();

        $data["ttrmanclsdwns"] = $this->nossa_model->getTtrManClsdWns();

        $data["ttrmanpndgwns"] = $this->nossa_model->getTtrManPndgWns();

        

        $data["ttrnonmanordwns"] = $this->nossa_model->getTtrNonManOrdWns();

        $data["ttrnonmanclsdwns"] = $this->nossa_model->getTtrNonManClsdWns();

        $data["ttrnonmanpndgwns"] = $this->nossa_model->getTtrNonManPndgWns();

        

        $data["rgrordwns"] = $this->nossa_model->getRgrOrdWns();

        $data["rgrclsdwns"] = $this->nossa_model->getRgrClsdWns();

        $data["rgrpndgwns"] = $this->nossa_model->getRgrPndgWns();

        

        $data["sqmordwns"] = $this->nossa_model->getSqmOrdWns();

        $data["sqmclsdwns"] = $this->nossa_model->getSqmClsdWns();

        $data["sqmpndgwns"] = $this->nossa_model->getSqmPndgwns();

        

        $data["infraordwns"] = $this->nossa_model->getInfraOrdWns();

        $data["infraclsdwns"] = $this->nossa_model->getInfraClsdWns();

        $data["infrapndgwns"] = $this->nossa_model->getInfraPndgWns();



        $data["ordwns"] = $data["hvcmanordwns"] + $data["hvcnonmanordwns"] + $data["ttrmanordwns"] + $data["ttrnonmanordwns"] + $data["rgrordwns"] + $data["sqmordwns"] + $data["infraordwns"];

        $data["clsdwns"] = $data["hvcmanclsdwns"] + $data["hvcnonmanclsdwns"] + $data["ttrmanclsdwns"] + $data["ttrnonmanclsdwns"] + $data["rgrclsdwns"] + $data["sqmclsdwns"] + $data["infraclsdwns"];

        $data["pndgwns"] = $data["hvcmanpndgwns"] + $data["hvcnonmanpndgwns"] + $data["ttrmanpndgwns"] + $data["ttrnonmanpndgwns"] + $data["rgrpndgwns"] + $data["sqmpndgwns"] + $data["infrapndgwns"];

        $data["blnkwns"] = $this->nossa_model->getBlnkWns();

        $data["ttlwns"] =  $data["ordwns"] + $data["clsdwns"] + $data["blnkwns"] + $data["pndgwns"];



        $data["clsttlwns"] = ($data["clsdwns"]!=0)?($data["clsdwns"] / $data["ttlwns"]) * 100:0;

        $data["prodtekwns"] = ($data["tknasstowns"]!=0)? $data["clsdwns"] / $data["tknasstowns"] :0;

        $data["avgtkttknwns"] = ($data["tknasstowns"]!=0)? $data["ttlwns"] / $data["tknasstowns"] :0;

        $data["sisatiktwns"] = ($data["ttlwns"]!=0)? (($data["ordwns"] + $data["pndgwns"] + $data["blnkwns"]) / $data["ttlwns"]) * 100:0;



 	//WTS
        $data["tknacstowts"] = $this->nossa_model->getTekAcWts();

        $data["tknasstowts"] = $this->nossa_model->getTekAsWts();



        $data["hvcmanordwts"] = $this->nossa_model->getHvcManOrdWts();

        $data["hvcmanclsdwts"] = $this->nossa_model->getHvcManClsdWts();

        $data["hvcmanpndgwts"] = $this->nossa_model->getHvcManPndgWts();

        

        $data["hvcnonmanordwts"] = $this->nossa_model->getHvcNonManOrdWts();

        $data["hvcnonmanclsdwts"] = $this->nossa_model->getHvcNonManClsdWts();

        $data["hvcnonmanpndgwts"] = $this->nossa_model->getHvcNonManPndgWts();

        

        $data["ttrmanordwts"] = $this->nossa_model->getTtrManOrdWts();

        $data["ttrmanclsdwts"] = $this->nossa_model->getTtrManClsdWts();

        $data["ttrmanpndgwts"] = $this->nossa_model->getTtrManPndgWts();

        

        $data["ttrnonmanordwts"] = $this->nossa_model->getTtrNonManOrdWts();

        $data["ttrnonmanclsdwts"] = $this->nossa_model->getTtrNonManClsdWts();

        $data["ttrnonmanpndgwts"] = $this->nossa_model->getTtrNonManPndgWts();

        

        $data["rgrordwts"] = $this->nossa_model->getRgrOrdWts();

        $data["rgrclsdwts"] = $this->nossa_model->getRgrClsdWts();

        $data["rgrpndgwts"] = $this->nossa_model->getRgrPndgWts();

        

        $data["sqmordwts"] = $this->nossa_model->getSqmOrdWts();

        $data["sqmclsdwts"] = $this->nossa_model->getSqmClsdWts();

        $data["sqmpndgwts"] = $this->nossa_model->getSqmPndgWts();

        

        $data["infraordwts"] = $this->nossa_model->getInfraOrdWts();

        $data["infraclsdwts"] = $this->nossa_model->getInfraClsdWts();

        $data["infrapndgwts"] = $this->nossa_model->getInfraPndgWts();



        $data["ordwts"] = $data["hvcmanordwts"] + $data["hvcnonmanordwts"] + $data["ttrmanordwts"] + $data["ttrnonmanordwts"] + $data["rgrordwts"] + $data["sqmordwts"] + $data["infraordwts"];

        $data["clsdwts"] = $data["hvcmanclsdwts"] + $data["hvcnonmanclsdwts"] + $data["ttrmanclsdwts"] + $data["ttrnonmanclsdwts"] + $data["rgrclsdwts"] + $data["sqmclsdwts"] + $data["infraclsdwts"];

        $data["pndgwts"] = $data["hvcmanpndgwts"] + $data["hvcnonmanpndgwts"] + $data["ttrmanpndgwts"] + $data["ttrnonmanpndgwts"] + $data["rgrpndgwts"] + $data["sqmpndgwts"] + $data["infrapndgwts"];

        $data["blnkwts"] = $this->nossa_model->getBlnkWts();

        $data["ttlwts"] =  $data["ordwts"] + $data["clsdwts"] + $data["blnkwts"] + $data["pndgwts"];



        $data["clsttlwts"] = ($data["clsdwts"]!=0)?($data["clsdwts"] / $data["ttlwts"]) * 100:0;

        $data["prodtekwts"] = ($data["tknasstowts"]!=0)? $data["clsdwts"] / $data["tknasstowts"] :0;

        $data["avgtkttknwts"] = ($data["tknasstowts"]!=0)? $data["ttlwts"] / $data["tknasstowts"] :0;

        $data["sisatiktwts"] = ($data["ttlwts"]!=0)? (($data["ordwts"] + $data["pndgwts"] + $data["blnkwts"]) / $data["ttlwts"]) * 100:0;


	//AVG NORTH
	$data["tknasnorth"] = $data["tknasstokbu"] + $data["tknasstosmn"] + $data["tknasstogod"] + $data["tknasstopkm"] + $data["tknasstokls"] + $data["tknasstokgd"];

	$data["tknacnorth"] = $data["tknacstokbu"] + $data["tknacstosmn"] + $data["tknacstogod"] + $data["tknacstopkm"] + $data["tknacstokls"] + $data["tknacstokgd"];


	//HVC
	$data["hvcmanordnorth"] = $data["hvcmanordkbu"] + $data["hvcmanordsmn"] + $data["hvcmanordgod"] + $data["hvcmanordpkm"] + $data["hvcmanordkls"] + $data["hvcmanordkgd"];

	$data["hvcmanclsdnorth"] = $data["hvcmanclsdkbu"] + $data["hvcmanclsdsmn"] + $data["hvcmanclsdgod"] + $data["hvcmanclsdpkm"] + $data["hvcmanclsdkls"] + $data["hvcmanclsdkgd"];

	$data["hvcmanpndgnorth"] = $data["hvcmanpndgkbu"] + $data["hvcmanpndgsmn"] + $data["hvcmanpndggod"] + $data["hvcmanpndgpkm"] + $data["hvcmanpndgkls"] + $data["hvcmanpndgkgd"];

	//TTR 3 JAM
	$data["hvcnonmanordnorth"] = $data["hvcnonmanordkbu"] + $data["hvcnonmanordsmn"] + $data["hvcnonmanordgod"] + $data["hvcnonmanordpkm"] + $data["hvcnonmanordkls"] + $data["hvcnonmanordkgd"];

	$data["hvcnonmanclsdnorth"] = $data["hvcnonmanclsdkbu"] + $data["hvcnonmanclsdsmn"] + $data["hvcnonmanclsdgod"] + $data["hvcnonmanclsdpkm"] + $data["hvcnonmanclsdkls"] + $data["hvcnonmanclsdkgd"];

	$data["hvcnonmanpndgnorth"] = $data["hvcnonmanpndgkbu"] + $data["hvcnonmanpndgsmn"] + $data["hvcnonmanpndggod"] + $data["hvcnonmanpndgpkm"] + $data["hvcnonmanpndgkls"] + $data["hvcnonmanpndgkgd"];

	//REPORTDATE
	$data["ttrmanordnorth"] = $data["ttrmanordkbu"] + $data["ttrmanordsmn"] + $data["ttrmanordgod"] + $data["ttrmanordpkm"] + $data["ttrmanordkls"] + $data["ttrmanordkgd"];

	$data["ttrmanclsdnorth"] = $data["ttrmanclsdkbu"] + $data["ttrmanclsdsmn"] + $data["ttrmanclsdgod"] + $data["ttrmanclsdpkm"] + $data["ttrmanclsdkls"] + $data["ttrmanclsdkgd"];

	$data["ttrmanpndgnorth"] = $data["ttrmanpndgkbu"] + $data["ttrmanpndgsmn"] + $data["ttrmanpndggod"] + $data["ttrmanpndgpkm"] + $data["ttrmanpndgkls"] + $data["ttrmanpndgkgd"];

	//LOGIC
	$data["ttrnonmanordnorth"] = $data["ttrnonmanordkbu"] + $data["ttrnonmanordsmn"] + $data["ttrnonmanordgod"] + $data["ttrnonmanordpkm"] + $data["ttrnonmanordkls"] + $data["ttrnonmanordkgd"];

	$data["ttrnonmanclsdnorth"] = $data["ttrnonmanclsdkbu"] + $data["ttrnonmanclsdsmn"] + $data["ttrnonmanclsdgod"] + $data["ttrnonmanclsdpkm"] + $data["ttrnonmanclsdkls"] + $data["ttrnonmanclsdkgd"];

	$data["ttrnonmanpndgnorth"] = $data["ttrnonmanpndgkbu"] + $data["ttrnonmanpndgsmn"] + $data["ttrnonmanpndggod"] + $data["ttrnonmanpndgpkm"] + $data["ttrnonmanpndgkls"] + $data["ttrnonmanpndgkgd"];

	//REGULAR
	$data["rgrordnorth"] = $data["rgrordkbu"] + $data["rgrordsmn"] + $data["rgrordgod"] + $data["rgrordpkm"] + $data["rgrordkls"] + $data["rgrordkgd"];

	$data["rgrclsdnorth"] = $data["rgrclsdkbu"] + $data["rgrclsdsmn"] + $data["rgrclsdgod"] + $data["rgrclsdpkm"] + $data["rgrclsdkls"] + $data["rgrclsdkgd"];

	$data["rgrpndgnorth"] = $data["rgrpndgkbu"] + $data["rgrpndgsmn"] + $data["rgrpndggod"] + $data["rgrpndgpkm"] + $data["rgrpndgkls"] + $data["rgrpndgkgd"];

	//SQM
	$data["sqmordnorth"] = $data["sqmordkbu"] + $data["sqmordsmn"] + $data["sqmordgod"] + $data["sqmordpkm"] + $data["sqmordkls"] + $data["sqmordkgd"];

	$data["sqmclsdnorth"] = $data["sqmclsdkbu"] + $data["sqmclsdsmn"] + $data["sqmclsdgod"] + $data["sqmclsdpkm"] + $data["sqmclsdkls"] + $data["sqmclsdkgd"];

	$data["sqmpndgnorth"] = $data["sqmpndgkbu"] + $data["sqmpndgsmn"] + $data["sqmpndggod"] + $data["sqmpndgpkm"] + $data["sqmpndgkls"] + $data["sqmpndgkgd"];

	//INFRACARE
	$data["infraordnorth"] = $data["infraordkbu"] + $data["infraordsmn"] + $data["infraordgod"] + $data["infraordpkm"] + $data["infraordkls"] + $data["infraordkgd"];

	$data["infraclsdnorth"] = $data["infraclsdkbu"] + $data["infraclsdsmn"] + $data["infraclsdgod"] + $data["infraclsdpkm"] + $data["infraclsdkls"] + $data["infraclsdkgd"];

	$data["infrapndgnorth"] = $data["infrapndgkbu"] + $data["infrapndgsmn"] + $data["infrapndggod"] + $data["infrapndgpkm"] + $data["infrapndgkls"] + $data["infrapndgkgd"];

	//TOTAL NORTH
	$data["ordnorth"] = $data["ordkbu"] + $data["ordsmn"] + $data["ordgod"] + $data["ordpkm"] + $data["ordkls"] + $data["ordkgd"];

	$data["clsdnorth"] = $data["clsdkbu"] + $data["clsdsmn"] + $data["clsdgod"] + $data["clsdpkm"] + $data["clsdkls"] + $data["clsdkgd"];

	$data["pndgnorth"] = $data["pndgkbu"] + $data["pndgsmn"] + $data["pndggod"] + $data["pndgpkm"] + $data["pndgkls"] + $data["pndgkgd"];

	$data["blnknorth"] = $data["blnkkbu"] + $data["blnksmn"] + $data["blnkgod"] + $data["blnkpkm"] + $data["blnkkls"] + $data["blnkkgd"];

	$data["ttlnorth"] = $data["ttlkbu"] + $data["ttlsmn"] + $data["ttlgod"] + $data["ttlpkm"] + $data["ttlkls"] + $data["ttlkgd"];


        $data["clsttlnorth"] = ($data["clsdnorth"]!=0)?($data["clsdnorth"] / $data["ttlnorth"]) * 100:0;

        $data["prodteknorth"] = ($data["tknasnorth"]!=0)? $data["clsdnorth"] / $data["tknasnorth"] :0;

        $data["avgtkttknnorth"] = ($data["tknasnorth"]!=0)? $data["ttlnorth"] / $data["tknasnorth"] :0;

        $data["sisatiktnorth"] = ($data["ttlnorth"]!=0)? (($data["ordnorth"] + $data["pndgnorth"] + $data["blnknorth"]) / $data["ttlnorth"]) * 100:0;


	//AVG SOUTH
	$data["tknassouth"] = $data["tknasstobbs"] + $data["tknasstoken"] + $data["tknasstopgr"] + $data["tknasstobtl"] + $data["tknasstowns"] + $data["tknasstowts"];

	$data["tknacsouth"] = $data["tknacstobbs"] + $data["tknacstoken"] + $data["tknacstopgr"] + $data["tknacstobtl"] + $data["tknacstowns"] + $data["tknacstowts"];


	//HVC
	$data["hvcmanordsouth"] = $data["hvcmanordbbs"] + $data["hvcmanordken"] + $data["hvcmanordpgr"] + $data["hvcmanordbtl"] + $data["hvcmanordwns"] + $data["hvcmanordwts"];

	$data["hvcmanclsdsouth"] = $data["hvcmanclsdbbs"] + $data["hvcmanclsdken"] + $data["hvcmanclsdpgr"] + $data["hvcmanclsdbtl"] + $data["hvcmanclsdwns"] + $data["hvcmanclsdwts"];

	$data["hvcmanpndgsouth"] = $data["hvcmanpndgbbs"] + $data["hvcmanpndgken"] + $data["hvcmanpndgpgr"] + $data["hvcmanpndgbtl"] + $data["hvcmanpndgwns"] + $data["hvcmanpndgwts"];

	//TTR 3 JAM
	$data["hvcnonmanordsouth"] = $data["hvcnonmanordbbs"] + $data["hvcnonmanordken"] + $data["hvcnonmanordpgr"] + $data["hvcnonmanordbtl"] + $data["hvcnonmanordwns"] + $data["hvcnonmanordwts"];

	$data["hvcnonmanclsdsouth"] = $data["hvcnonmanclsdbbs"] + $data["hvcnonmanclsdken"] + $data["hvcnonmanclsdpgr"] + $data["hvcnonmanclsdbtl"] + $data["hvcnonmanclsdwns"] + $data["hvcnonmanclsdwts"];

	$data["hvcnonmanpndgsouth"] = $data["hvcnonmanpndgbbs"] + $data["hvcnonmanpndgken"] + $data["hvcnonmanpndgpgr"] + $data["hvcnonmanpndgbtl"] + $data["hvcnonmanpndgwns"] + $data["hvcnonmanpndgwts"];

	//REPORTDATE
	$data["ttrmanordsouth"] = $data["ttrmanordbbs"] + $data["ttrmanordken"] + $data["ttrmanordpgr"] + $data["ttrmanordbtl"] + $data["ttrmanordwns"] + $data["ttrmanordwts"];

	$data["ttrmanclsdsouth"] = $data["ttrmanclsdbbs"] + $data["ttrmanclsdken"] + $data["ttrmanclsdpgr"] + $data["ttrmanclsdbtl"] + $data["ttrmanclsdwns"] + $data["ttrmanclsdwts"];

	$data["ttrmanpndgsouth"] = $data["ttrmanpndgbbs"] + $data["ttrmanpndgken"] + $data["ttrmanpndgpgr"] + $data["ttrmanpndgbtl"] + $data["ttrmanpndgwns"] + $data["ttrmanpndgwts"];

	//LOGIC
	$data["ttrnonmanordsouth"] = $data["ttrnonmanordbbs"] + $data["ttrnonmanordken"] + $data["ttrnonmanordpgr"] + $data["ttrnonmanordbtl"] + $data["ttrnonmanordwns"] + $data["ttrnonmanordwts"];

	$data["ttrnonmanclsdsouth"] = $data["ttrnonmanclsdbbs"] + $data["ttrnonmanclsdken"] + $data["ttrnonmanclsdpgr"] + $data["ttrnonmanclsdbtl"] + $data["ttrnonmanclsdwns"] + $data["ttrnonmanclsdwts"];

	$data["ttrnonmanpndgsouth"] = $data["ttrnonmanpndgbbs"] + $data["ttrnonmanpndgken"] + $data["ttrnonmanpndgpgr"] + $data["ttrnonmanpndgbtl"] + $data["ttrnonmanpndgwns"] + $data["ttrnonmanpndgwts"];

	//REGULAR
	$data["rgrordsouth"] = $data["rgrordbbs"] + $data["rgrordken"] + $data["rgrordpgr"] + $data["rgrordbtl"] + $data["rgrordwns"] + $data["rgrordwts"];

	$data["rgrclsdsouth"] = $data["rgrclsdbbs"] + $data["rgrclsdken"] + $data["rgrclsdpgr"] + $data["rgrclsdbtl"] + $data["rgrclsdwns"] + $data["rgrclsdwts"];

	$data["rgrpndgsouth"] = $data["rgrpndgbbs"] + $data["rgrpndgken"] + $data["rgrpndgpgr"] + $data["rgrpndgbtl"] + $data["rgrpndgwns"] + $data["rgrpndgwts"];

	//SQM
	$data["sqmordsouth"] = $data["sqmordbbs"] + $data["sqmordken"] + $data["sqmordpgr"] + $data["sqmordbtl"] + $data["sqmordwns"] + $data["sqmordwts"];

	$data["sqmclsdsouth"] = $data["sqmclsdbbs"] + $data["sqmclsdken"] + $data["sqmclsdpgr"] + $data["sqmclsdbtl"] + $data["sqmclsdwns"] + $data["sqmclsdwts"];

	$data["sqmpndgsouth"] = $data["sqmpndgbbs"] + $data["sqmpndgken"] + $data["sqmpndgpgr"] + $data["sqmpndgbtl"] + $data["sqmpndgwns"] + $data["sqmpndgwts"];

	//INFRACARE
	$data["infraordsouth"] = $data["infraordbbs"] + $data["infraordken"] + $data["infraordpgr"] + $data["infraordbtl"] + $data["infraordwns"] + $data["infraordwts"];

	$data["infraclsdsouth"] = $data["infraclsdbbs"] + $data["infraclsdken"] + $data["infraclsdpgr"] + $data["infraclsdbtl"] + $data["infraclsdwns"] + $data["infraclsdwts"];

	$data["infrapndgsouth"] = $data["infrapndgbbs"] + $data["infrapndgken"] + $data["infrapndgpgr"] + $data["infrapndgbtl"] + $data["infrapndgwns"] + $data["infrapndgwts"];

	//TOTAL SOUTH
	$data["ordsouth"] = $data["ordbbs"] + $data["ordken"] + $data["ordpgr"] + $data["ordbtl"] + $data["ordwns"] + $data["ordwts"];

	$data["clsdsouth"] = $data["clsdbbs"] + $data["clsdken"] + $data["clsdpgr"] + $data["clsdbtl"] + $data["clsdwns"] + $data["clsdwts"];

	$data["pndgsouth"] = $data["pndgbbs"] + $data["pndgken"] + $data["pndgpgr"] + $data["pndgbtl"] + $data["pndgwns"] + $data["pndgwts"];

	$data["blnksouth"] = $data["blnkbbs"] + $data["blnkken"] + $data["blnkpgr"] + $data["blnkbtl"] + $data["blnkwns"] + $data["blnkwts"];

	$data["ttlsouth"] = $data["ttlbbs"] + $data["ttlken"] + $data["ttlpgr"] + $data["ttlbtl"] + $data["ttlwns"] + $data["ttlwts"];


        $data["clsttlsouth"] = ($data["clsdsouth"]!=0)?($data["clsdsouth"] / $data["ttlsouth"]) * 100:0;

        $data["prodteksouth"] = ($data["tknassouth"]!=0)? $data["clsdsouth"] / $data["tknassouth"] :0;

        $data["avgtkttknsouth"] = ($data["tknassouth"]!=0)? $data["ttlsouth"] / $data["tknassouth"] :0;

        $data["sisatiktsouth"] = ($data["ttlsouth"]!=0)? (($data["ordsouth"] + $data["pndgsouth"] + $data["blnksouth"]) / $data["ttlsouth"]) * 100:0;


	// NAS
     	$data["ttlnas"] = $this->nossa_model->getTtlNas();


	//TOTAL ALL
	$data["tknasall"] = $data["tknasnorth"] + $data["tknassouth"];

	$data["tknacall"] = $data["tknacnorth"] + $data["tknacsouth"];

	//HVC
	$data["hvcmanordall"] = $data["hvcmanordnorth"] + $data["hvcmanordsouth"];

	$data["hvcmanclsdall"] = $data["hvcmanclsdnorth"] + $data["hvcmanclsdsouth"];

	$data["hvcmanpndgall"] = $data["hvcmanpndgnorth"] + $data["hvcmanpndgsouth"];

	//TTR 3 JAM
	$data["hvcnonmanordall"] = $data["hvcnonmanordnorth"] + $data["hvcnonmanordsouth"];

	$data["hvcnonmanclsdall"] = $data["hvcnonmanclsdnorth"] + $data["hvcnonmanclsdsouth"];

	$data["hvcnonmanpndgall"] = $data["hvcnonmanpndgnorth"] + $data["hvcnonmanpndgsouth"];

	//REPORTDATE
	$data["ttrmanordall"] = $data["ttrmanordnorth"] + $data["ttrmanordsouth"];

	$data["ttrmanclsdall"] = $data["ttrmanclsdnorth"] + $data["ttrmanclsdsouth"];

	$data["ttrmanpndgall"] = $data["ttrmanpndgnorth"] + $data["ttrmanpndgsouth"];

	//LOGIC
	$data["ttrnonmanordall"] = $data["ttrnonmanordnorth"] + $data["ttrnonmanordsouth"];

	$data["ttrnonmanclsdall"] = $data["ttrnonmanclsdnorth"] + $data["ttrnonmanclsdsouth"];

	$data["ttrnonmanpndgall"] = $data["ttrnonmanpndgnorth"] + $data["ttrnonmanpndgsouth"];

	//REGULAR
	$data["rgrordall"] = $data["rgrordnorth"] + $data["rgrordsouth"];

	$data["rgrclsdall"] = $data["rgrclsdnorth"] + $data["rgrclsdsouth"];

	$data["rgrpndgall"] = $data["rgrpndgnorth"] + $data["rgrpndgsouth"];

	//SQM
	$data["sqmordall"] = $data["sqmordnorth"] + $data["sqmordsouth"];

	$data["sqmclsdall"] = $data["sqmclsdnorth"] + $data["sqmclsdsouth"];

	$data["sqmpndgall"] = $data["sqmpndgnorth"] + $data["sqmpndgsouth"];

	//INFRACARE
	$data["infraordall"] = $data["infraordnorth"] + $data["infraordsouth"];

	$data["infraclsdall"] = $data["infraclsdnorth"] + $data["infraclsdsouth"];

	$data["infrapndgall"] = $data["infrapndgnorth"] + $data["infrapndgsouth"];

	//TOTAL all
	$data["ordall"] = $data["ordnorth"] + $data["ordsouth"];

	$data["clsdall"] = $data["clsdnorth"] + $data["clsdsouth"];

	$data["pndgall"] = $data["pndgnorth"] + $data["pndgsouth"];

	$data["blnkall"] = $data["blnknorth"] + $data["blnksouth"] + $data["ttlnas"];

	$data["ttlall"] = $data["ttlnorth"] + $data["ttlsouth"] + $data["ttlnas"];


        $data["clsttlall"] = ($data["clsdall"]!=0)?($data["clsdall"] / $data["ttlall"]) * 100:0;

        $data["prodtekall"] = ($data["tknasall"]!=0)? $data["clsdall"] / $data["tknasall"] :0;

        $data["avgtkttknall"] = ($data["tknasall"]!=0)? $data["ttlall"] / $data["tknasall"] :0;

        $data["sisatiktall"] = ($data["ttlall"]!=0)? (($data["ordall"] + $data["pndgall"] + $data["blnkall"]) / $data["ttlall"]) * 100:0;




        $this->load->view("dashboard", $data);
        

    }

}