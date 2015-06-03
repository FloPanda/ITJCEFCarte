//todo : vérifier en permanence que le mec est connecté
//var host = "http://dev-app.jcef-shanghai.com/Cartes/Site/View/";
var host = "../../../ITJCEFCarte/Site";
var debug = true;
function log(mess) {
    if (debug) {
        console.log(mess);
    }
}

function init() {
	document.addEventListener("deviceready", deviceReady, true);
    deviceReady();
}

function checkPreAuth() {
    if(window.localStorage["user_uuid"] != undefined && window.localStorage["user_password"] != undefined) {
        var u= window.localStorage["user_uuid"];
        var p= window.localStorage["user_password"];
        var expire = new Date (window.localStorage["expireAt"]);
        var maintenant = new Date ();
        if (expire < maintenant) {
            var okbool = handleLogin(u, p);
            if (okbool) {
                window.localStorage["user_uuid"]=u;
                window.localStorage["user_password"]=p;
            } else {
                window.localStorage.removeItem("user_uuid");
                window.localStorage.removeItem("user_password");
            }
            return (okbool);
        } else {
            return (true);
        }
        } else {
            return (false);
    }
}

//fonction qui se charge de reconnecter en toute situation (appelée uniquement par checkPreAuth)
function handleLogin(u,p) {
    if(u != '' && p!= '') {
        var bool = false;
        var current = $("#user_uuid");
        $.ajax({
               type:'POST',
               url: host+"/Controller/index.php",
               data: {user_uuid:u,user_password:p},
               async: false,
               statusCode:
               {
               200 : function(res){
               //j'enregistre l'id, le mot de passe, le token et la date de fin
               window.localStorage["token"]=res.token;
               window.localStorage["expireAt"]=res.expireAt;
               bool = true;
               },
               401 : function(){
               self.showAlert(current, "Connexion impossible, le couple identifiant/mot de passe n'a pas été reconnu", "erreur");
               },
               400 : function(){
               self.showAlert(current, "votre champs email ne contient pas un email valide", "erreur");
               },
               500: function(){
               self.showAlert(current, "Le serveur vient de rencontrer une erreur inattendue, nous avons enregistré le problème.", "erreur");
               },
               404: function(){
               self.showAlert(current, "le serveur ne répond pas, il semble y avoir un problème...", "erreur");
               }
               },
               dataType: "JSON"
               });
    } else {
        self.showAlert(current, "L'un des champs est resté vide", "erreur");
    }
    return (bool);
}

function onGlobal(){
    
    $(document).on("pageshow", "#login", function() {
                   if(checkPreAuth()){openTrombi();}
                   });
    

    $(document).on("pageshow",  "#settings", function(event, ui) {
                   $("#account").append(' '+window.localStorage["user_uuid"]+'.');
                   } );

    $(document).on("pageshow",  "#trombinoscope", function(event, ui) {
                   
                   } );

    $(document).on("pageshow",  "#user_profil", function(event, ui) {
                   alert('zeefezfzefzeffe');
                   //$("#user_profil > #user_surname").append(' '+window.localStorage["user_surname"]);
                   //$("#user_name").append(' '+window.localStorage["user_name"]);
                   //$("#user_jcef_function").append(' '+window.localStorage["user_jcef_function"]);
                   } );

    $(document).on("pageshow",  "#events_trombinoscope", function(event, ui) {
                   
                   } );

    $(document).on("pageshow",  "#commissions_trombinoscope", function(event, ui) {
                   
                   } );

                   
    $(document).on("pageshow", "#subscription", function() {
                   $("#subscriptionForm").on("submit",login);
                   });

}
//fonction appelée ailleurs pour ouvrir proprement la page login
function openLogin(){
    $.mobile.pageContainer.pagecontainer('change', "#login");   
}

function openUserProfil(){
    WSuser_profil();
    $.mobile.pageContainer.pagecontainer('change', "#user_profil");   
}

function openEventProfil(){
    WSevent_profil();
    $.mobile.pageContainer.pagecontainer('change', "#event_profil");   
}

function openCommissionProfil(){
    WScommission_profil();
    $.mobile.pageContainer.pagecontainer('change', "#commission_profil");   
}

function openEditUserProfil(){
    WSedit_user();
    $.mobile.pageContainer.pagecontainer('change', "#edit_user");   
}

//fonction appelée ailleurs pour ouvrir proprement la page trombinoscope
function openUsrTrombi() {
    WStrombinoscope_users();
    $.mobile.pageContainer.pagecontainer('change', "#users_trombinoscope");
}

//fonction appelée ailleurs pour ouvrir proprement la page events_trombinoscope
function openEvTrombi() {
    WStrombinoscope_events();
    $.mobile.pageContainer.pagecontainer('change', "#events_trombinoscope");
}

//fonction appelée ailleurs pour ouvrir proprement la page commissions_trombinoscope
function openComTrombi() {
  WStrombinoscope_commissions();
    $.mobile.pageContainer.pagecontainer('change', "#commissions_trombinoscope");
}

//fonction appelée ailleurs pour ouvrir proprement la page settings
function openSettings(){
    $(':mobile-pagecontainer').pagecontainer('change', '#settings');
}

//fonction appelée ailleurs pour ouvrir proprement la page subscription
function openSubscription(){
    $(':mobile-pagecontainer').pagecontainer('change', '#subscription');
}

//fonction appelée par init qui vérifie si nous avons des identifiants, nous connecte le cas échéant ou nous propose de nous connecter
function deviceReady() {
    $(document).on("pageshow", "#launching", function(event, ui){
                   $("body").addClass("ios7");
                   onGlobal();
                   liveForm();
                   
                        openLogin();
                   
                   });
}

//fonction qui permet d'afficher une alerte même si le système natif n'est pas accessible
function showAlert(current, message, title) {
    if (navigator.notification) {
        navigator.notification.alert(message, null, title, 'OK');
    } else {
   	//var popup= $("#popupBasic");
   	var popup = current.parents('div[data-role="page"]').find(".popupBasic");
   	popup.find("h2").html(title);
   	popup.find("p").html(message);
   	popup.popup();
   	popup.popup("open", null);
    }
}

function showModal(current, message, title,confirm, cancel) {
    if (navigator.notification) {
        navigator.notification.confirm(
                                       message,
                                       onconfirm,
                                       title,
                                       'OK, annuler');
        
    } else {
    	var initpopup = current.parents('div[data-role="page"]').find(".modalBasic");
        var popup = initpopup.clone();
        initpopup.after(popup);
        var id = "m_" + Math.floor(Math.random() * 20000);
        popup.attr("id", id);
        popup.attr("class","");

        $("#" + id).find("h2").html(title);
        $("#" + id).find("p").html(message);
        $("#" + id).popup();
        $("#" + id + " #okbutton").on("click", function () {
            if (confirm) {
                confirm();
            }
        });
        $("#" + id + " #kobutton").on("click", function () {
            $("#" + id).popup('close');
            if (cancel) {
                cancel();
            }
        });
        $("#" + id).popup("open", { role: "dialog"});
    }
}

//fonction de connection appelée depuis index.html
//fonction qui récupère le token et le mot de passe
function login(){
    //disable the button so we can't resubmit while we wait :
    var u = $("#user_uuid").val();
    var p = $("#user_password").val();
    //var a = $("#user_is_admin").val();
    var current = $("#user_uuid");
    if(u != '' && p!= '') {
        $.ajax({
               type:'POST',
               //url: host + "/2/sessions",
               url: "http://localhost/ITJCEFCarte/Site/Controller/index.php",
               data: {user_uuid:u,user_password:p},
               async: false,
               statusCode:
               {
               200 : function(res){
               //j'enregistre l'id, le mot de passe, le token et la date de fin
               window.localStorage["user_uuid"] = u;
               window.localStorage["user_password"] = p;
               //window.localStorage["user_is_admin"] = a;
               window.localStorage["token"]=res.token;
               window.localStorage["expireAt"]=res.expireAt;
               openUserProfil(); 
               },
               401 : function(){
               self.showAlert(current,"Connexion impossible, le couple identifiant/mot de passe n'a pas été reconnu", "erreur");
               },
               400 : function(){
               self.showAlert(current,"Votre champ identifiant ne contient pas un identifiant valide", "erreur");
               },
               500: function(){
               self.showAlert(current,"Le serveur vient de rencontrer une erreur inattendue, nous avons enregistré le problème.", "erreur");
               },
               404: function(){
               self.showAlert(current,"Le serveur ne répond pas, il semble y avoir un problème...", "erreur");
               }
               },
               dataType: "JSON"
               });
    } else {
	    self.showAlert(current,"Le login et mot de passe sont obligatoire","erreur");    
	   //		$('#popupLogin').popup("open");

	    }
    return false;
}

//A MODIF. Affiche trombi user.
function WStrombinoscope_users(){
    var URL = "http://localhost/ITJCEFCarte/Site/Controller/WStrombinoscope.php";
    var contentElem;
    
        $.ajax({
            //type: 'POST',
            //url: URL +"?user="+user_uuid,
            url: URL,
            //contentType: "application/json",
            dataType: "json",
            beforeSend: setHeader,
            //data: data,
            async: false,
            statusCode: {
                200: function (res) {
                    var obj = JSON.parse(res);
                    
                    var strObj = JSON.stringify(res);
                    //console.log(obj);                  


                   $("#users_trombinoscope > #trombiUsers").append('GGHYGFHIUUTFGHJ');
                   

                    },
                400: function(){
                    self.showAlert(current, "votre champs ISBN ne contient pas un ISBN valide", "erreur");
                    },
                401: function(){
                    self.showAlert(current, "Connexion impossible, Vous avez été déconnecté", "erreur");
                    if (checkPreAuth()) {
                        self.showAlert(current, "reconnecté ! réessayez", "information");
                    } else {
                        self.showAlert(current, "reconnexion impossible, vérifiez vos identifiants","erreur");
                        logout();
                        }
                    },
                404: function(){
                    //je teste si ma zone de stockage pour ISBNNoContentList a été initialisée
                    if (window.sessionStorage["ISBNNoContentList"]!= undefined){
                        //Si oui alors j'ajoute le nouvel ISBN à mon tableau
                        var ISBNNoContentList = JSON.parse(window.sessionStorage["ISBNNoContentList"]);
                        ISBNNoContentList.push(i);
                        window.sessionStorage["ISBNNoContentList"]=JSON.stringify(ISBNNoContentList);
                    } else {
                    //Sinon j'initialise
                        window.sessionStorage["ISBNNoContentList"]=JSON.stringify([i]);
                    }
                    },
                500: function(){
                    self.showAlert(current, "erreur interne au serveur, veuillez réessayer plus tard", "erreur");
                    }
                    }
            });
    //} else {
      //  $("#submit").removeAttr("disabled");
    //}
    return false;
}

//A MODIF. Affiche trombi commissions.
function WStrombinoscope_commissions(){
    
}

//A MODIF. Affiche trombi events.
function WStrombinoscope_events(){
    
}


function WSedit_user(){
    $("#user_profil > user_surname").append('UFIUEFIEGIFGUEGF');
    //alert("jnninin");
}

//A MODIF fonction qui récupère le contenu associé à un user_uuid appelée depuis user_profil.html
function WSuser_profil(){
    var URL = "http://localhost/ITJCEFCarte/Site/Controller/WSuser_profil.php";
    var contentElem;
    //if(user != '') {
        $.ajax({
            //type: 'POST',
            //url: URL +"?user="+user_uuid,
            url: URL,
            //contentType: "application/json",
            dataType: "json",
            beforeSend: setHeader,
            //data: data,
            async: false,
            statusCode: {
                200: function (res) {
                    //var obj = JSON.parse(userJSON);
                    //var div = document.getElementById("tg");
                    //var php_var = div.textContent;
                    
                    //localStorage.setItem('php_var', php_var);
                    
                    //var toto = local$.map(res.fields);
                    var strObj = JSON.stringify(res);
                    console.log(res);

                    //var success =  $($.parseHTML(res)).filter("#tg").childNodes.data; 
                    //console.log(success); // div#success


                    //var div = $('#tg', $(res));
                    //$('#targetDiv').html(div);

                    //var div = $("div",res);

                    //var php_var = div.textContent;
                    //var strObj = JSON.stringify(success);
                    //alert(strObj); 
                    //var obj = JSON.parse(strObj);
                    //alert(obj.user_surname);





                    //document.write('Nom :');
                    //document.write(obj.user_name);

                    //window.localStorage["user_jcef_function"] = obj.user_jcef_function;
                    /*window.localStorage["user_surname"] = obj.user_surname;
                    window.localStorage["user_name"] = obj.user_name;
                    window.localStorage["user_company"] = obj.user_company;
                    window.localStorage["user_subscription_date"] = obj.user_subscription_date;
                    window.localStorage["user_email_jcef"] = obj.user_email_jcef;
                    window.localStorage["user_birth"] = obj.user_birth;
                    window.localStorage["user_sex"] = obj.user_sex;
                    window.localStorage["user_skype"] = obj.user_skype;
                    window.localStorage["user_weixin"] = obj.user_weixin;
                    window.localStorage["user_picture"] = obj.user_picture;*/
                    


                   $("#user_profil > #user_picture").append('<img src="'+window.localStorage["user_picture"]+'"</img>');
                   $("#user_profil > #user_surname").append(' '+window.localStorage["user_surname"]);
                   $("#user_profil > #user_name").append(' '+window.localStorage["user_name"]);
                   //$("#user_profil > #user_jcef_function").append(' '+window.localStorage["user_jcef_function"]);

                    
                
                    /*$user_concerned->user_nation
                
                    $user_concerned->user_company
                
                    $user_concerned->user_subscription_date
                
                    $user_concerned->user_email_jcef
               
                    $user_concerned->user_birth
               
                    $user_concerned->user_sex
               
                    $user_concerned->user_skype
                
                    $user_concerned->user_weixin*/





                    },
                400: function(){
                    self.showAlert(current, "votre champs ISBN ne contient pas un ISBN valide", "erreur");
                    },
                401: function(){
                    self.showAlert(current, "Connexion impossible, Vous avez été déconnecté", "erreur");
                    if (checkPreAuth()) {
                        self.showAlert(current, "reconnecté ! réessayez", "information");
                    } else {
                        self.showAlert(current, "reconnexion impossible, vérifiez vos identifiants","erreur");
                        logout();
                        }
                    },
                404: function(){
                    //je teste si ma zone de stockage pour ISBNNoContentList a été initialisée
                    if (window.sessionStorage["ISBNNoContentList"]!= undefined){
                        //Si oui alors j'ajoute le nouvel ISBN à mon tableau
                        var ISBNNoContentList = JSON.parse(window.sessionStorage["ISBNNoContentList"]);
                        ISBNNoContentList.push(i);
                        window.sessionStorage["ISBNNoContentList"]=JSON.stringify(ISBNNoContentList);
                    } else {
                    //Sinon j'initialise
                        window.sessionStorage["ISBNNoContentList"]=JSON.stringify([i]);
                    }
                    },
                500: function(){
                    self.showAlert(current, "erreur interne au serveur, veuillez réessayer plus tard", "erreur");
                    }
                    }
            });
    //} else {
      //  $("#submit").removeAttr("disabled");
    //}
    return false;
}

//je place le header comme le veulent tous les WS sauf tags et sessions.
function setHeader(xhr){
    xhr.setRequestHeader('X-Paperus-Session', window.localStorage["token"]);
}
// header spécifique pour tags où j'ajoute que je veux une bae 64
function setHeaderTags(xhr){
    setHeader(xhr);
    xhr.setRequestHeader('Accept', 'image/png+base64');
}


//Fonction appelée par makeCodes qui va créer en sessionStorage deux tableaux : ISBNSelected et ContentSelected à partir de ce qu'a sélectionné l'utilisateur dans son formulaire ChoosContent.html
function memorizeContentSelected(ids){
    var idSelected=ids
    var contentSelected = [];
    var ISBNSelected = [];
    var content={};
    var contentsList = JSON.parse(window.sessionStorage["contenus"]);
    var contentInOneISBN = [];
    var ISBNList= JSON.parse(window.sessionStorage["ISBNContentList"]);
    for (var i=0, c=idSelected.length; i<c; i++){
        for (var j=0, d=ISBNList.length; j<d; j++){
            contentInOneISBN = JSON.parse(contentsList[j]);
            for (var k=0, e=contentInOneISBN.length; k<e; k++){
                content = contentInOneISBN[k];
                if (content.id == idSelected[i]){
                    idSelected[i]="default";
                    contentSelected.push(content);
                    ISBNSelected.push(ISBNList[j]);
                }
                content={};
            }
            contentInOneISBN = [];
        }
    }
    window.sessionStorage["ISBNSelected"] = JSON.stringify(ISBNSelected);
    window.sessionStorage["contentSelected"] = JSON.stringify(contentSelected);
}

//fontion appelée par makeCodes qui renvoie le tableau des ids sélectionnés
function selectedIds (){
    var selectedItems=[];
    $("input[type=checkbox]:checked").each(function(){
                                           selectedItems.push($(this).attr('name'));
                                           });
    return selectedItems;
}

//fonction globale appelée par chooseContent.html, elle parcourt la liste des contenus, ajoute ceux qui sont sélectionnés à un tableau puis pour chacun des éléments du tableau elle appelle generateQRCode
//je dois créer des tableaux : content qui contient : {ISBN, res.contentText} puis contentSelected qui contient {ISBN, res.contentText}
//je parcourt les deux, l'un pour
function makeCodes(){
    var ISBNSelected=[];
    var current=$("#choice");
    // je récupère dans un tableau ma liste des Ids sélectionnés
    var selectedItems = selectedIds();
    // Je mémorise les infos relatives à ces Ids
    memorizeContentSelected(selectedItems);
    var contentSelected = JSON.parse(window.sessionStorage["contentSelected"]);
    ISBNSelected = JSON.parse(window.sessionStorage["ISBNSelected"]);
    //Je calcule le total à rajouter à la vente du livre physique
    var total = calculateTotal(contentSelected);
    if (total > 0) {
        self.showModal(current, "Avez vous bien facturé " + total + " euros au client en plus de sa commande de livres physiques ? Sinon, annuler et rester sur cette page", "information", function () {
                       for (i=0, c=selectedItems.length; i<c; i++){
                       generateQRCode(ISBNSelected[i], contentSelected[i].id, current);
                       }
                       openVisualizeTag();
                       });
    } else {
        for (i=0, c=selectedItems.length; i<c; i++){
            generateQRCode(ISBNSelected[i], contentSelected[i].id, current);
        }
        openVisualizeTag();
    }
        return false;
}



//fonction qui envoie le formulaire d'inscription
function subscribe (){
    var name = $("#name").val();
    var firstname = $("#firstname").val();
    var email = $("#emailsubscribe").val();
    var phone = $("#phone").val();
    var bookstoreCommercialName = $("#bookstoreCommercialName").val();
    var bookstoreEntity = $("#bookstoreEntity").val();
    var RCSNumber = $("#RCSNumber").val();
    var bookstoreRIB = $("#bookstoreRIB").val();
    var current = $("#RCSNumber");
    if(name != '' && firstname != '' && email != '' && phone != '' && bookstoreCommercialName != '' &&  bookstoreEntity  != '' && RCSNumber != '') {
        $.ajax({
               type:'POST',
               url: host + "/2/Registers",
               data: {
                firstName:firstname,
                lastName:name,
                phoneNumber:phone,
                email:email,
                bookstoreName:bookstoreCommercialName,
                companyName:bookstoreEntity,
                rcsNumber:RCSNumber,
                iban:bookstoreRIB
                },
               async: false,
               statusCode:
               {
               200 : function(res){
               self.showAlert(current,"Nous avons bien reçu votre demande d'inscription, vous serez rencontactés très prochainnement","Merci,");
               },
               401 : function(){
               self.showAlert(current,"Connexion impossible, nous n'avons pas reçu toutes vos données, réessayez plus tard", "erreur");
               },
               400 : function(){
               self.showAlert(current,"Connexion impossible, nous n'avons pas reçu toutes vos données, réessayez plus tard", "erreur");               },
               500: function(){
               self.showAlert(current,"Connexion impossible, nous n'avons pas reçu toutes vos données, réessayez plus tard", "erreur");               },
               404: function(){
               self.showAlert(current,"Connexion impossible, nous n'avons pas reçu toutes vos données, réessayez plus tard", "erreur");               }
               },
               dataType: "JSON"
               });
    } else {
	    self.showAlert(current,"Tous les champs obligatoires n'ont pas été remplis","erreur");
    }
    return false;
}



//fontion pour revenir à l'accueil et effacer la vente actuelle TODO savoir où je suis
function backToHome(current){
    var bool = false;
    var activePage = $.mobile.activePage.attr("id");
    if (activePage == "visualizeTag") {
        self.showModal(current, "les codes ont-ils tous été scannés ? Sinon, annuler et rester sur cette page", "information", function () {
            sessionStorage.clear();
            //openScanBarcode();
        });
    } else {
        if (activePage == "scanBarcode") {
            self.showModal(current, "effacer les codes saisis et reprendre au début ?", "information", function (){
                           resetScanBarcode();
                           $.mobile.changePage(
                                               window.location.href,
                                               {
                                               allowSamePageTransition : true,
                                               transition              : 'none',
                                               showLoadMsg             : false,
                                               reloadPage              : true
                                               }
                                               );});
        } else {
        self.showModal(current, "annuler cette vente et reprendre du début ?", "information", function () {
            sessionStorage.clear();
            //openScanBarcode();
        });
        }
    }
}

//fonction de déconnexion !TODO : savoir où je suis
function logout() {
	var current=$("#account");
    self.showModal(current, "Souhaitez-vous vraiment vous déconnecter ?", "information", function () {
        self.showAlert(current, "Déconnexion en cours", "information");
        sessionStorage.clear();
        localStorage.clear();
        openLogin();
    });
}



//fonction qui génère la page chooseContent.html
function drawContents() {
    $('#articleKOContent').html('');
    $('#articleOKContent').html('');
    if (window.sessionStorage["ISBNNoContentList"]!= undefined){
        $.get('js/template.html', function(template) {
              // charge le fichier templates et récupère le contenu de la
              var ISBNNoContent= {"ISBN":JSON.parse(window.sessionStorage["ISBNNoContentList"])};
              var template = $(template).filter('#tpl-noContent').html();
              var html = Mustache.to_html(template, ISBNNoContent);
              $('#articleKOContent').html(html);
              },'html'); }
    if (window.sessionStorage["ISBNContentList"]!= undefined){
        $.get('js/template.html', function(template) {
              // charge le fichier templates et récupère le contenu de la
              var ISBNContentList = [];
              var ISBNContent= {};
              var Contents = JSON.parse(window.sessionStorage["contenus"]);
              var ISBNList= JSON.parse(window.sessionStorage["ISBNContentList"]);
              for (var i=0, c=ISBNList.length; i<c; i++){
                ISBNContent.ISBN = ISBNList.pop();
                var content = JSON.parse(Contents.pop());
                for (var j=0, d=content.length; j<d; j++){
                    content[j] = { content : content[j], idCheckBox : Math.floor(Math.random() * 100000) + 1}
                }
                ISBNContent.content = content;
                ISBNContentList.push(ISBNContent);
                ISBNContent={};
                }
              var template = $(template).filter('#tpl-contentList').html();
              ISBNContentList={ISBNList: ISBNContentList};
              var html = Mustache.to_html(template, ISBNContentList);
              $('#articleOKContent').html(html).trigger('create');
              },'html');}
    
}


