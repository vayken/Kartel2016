<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo "wesh man" ?>
            Voici quelques petits tests :
        </p>

        <a href="web.php?nom=Bounyasit&amp;prenom=Vibert">Dites moi bonjour</a>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>


        <form method="post" action="web.php">
            <label for="prenom">Prenom : <input type="text" name="prenom" id="prenom" placeholder="Ex:Justin"/></label>
            <input type="submit" value="Envoyer" /> <br /> <br />

            <label for="a_des_amis">J'ai des amis<input type="checkbox" name ="a_des_amis" id="a_des_amis" /></label>

            <p>Est-tu un bogoss ?</p>
            <input type="radio" name="bogoss" value="ouais" id="ouais" checked /><label for="ouais">Ouais mec</label>
            <input type="radio" name="bogoss" value="nan" id="nan" /><label for="nan">Nan t'es fous</label>

            <p>
                <select name="pays" id="pays">
                       <optgroup label="Europe">
                           <option value="france" selected>France</option>
                           <option value="espagne">Espagne</option>
                           <option value="italie">Italie</option>
                           <option value="royaume-uni">Royaume-Uni</option>
                       </optgroup>
                       <optgroup label="Amérique">
                           <option value="canada">Canada</option>
                           <option value="etats-unis">Etats-Unis</option>
                       </optgroup>
                       <optgroup label="Asie">
                           <option value="chine">Chine</option>
                           <option value="japon">Japon</option>
                       </optgroup>
                </select>
            </p>

            <p>
                <label for="texte_ici">Tape du texte ici azy <br /></label>
                <textarea name="texte_ici" id="texte_ici">tape ici</textarea>
            </p>

           <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
        </form>


        
        <?php
/* Encore du PHP
Toujours du PHP 

header('Location: formulaire.php?w=true'); pour rediriger


$_FILES['monfichier']['name']
Contient le nom du fichier envoyé par le visiteur.

$_FILES['monfichier']['type']
Indique le type du fichier envoyé. Si c'est une image gif par exemple, le type sera image/gif.

$_FILES['monfichier']['size']
Indique la taille du fichier envoyé. Attention : cette taille est en octets. 
Il faut environ 1 000 octets pour faire 1 Ko, et 1 000 000 d'octets pour faire 1 Mo.
Attention : la taille de l'envoi est limitée par PHP. Par défaut,
impossible d'uploader des fichiers de plus de 8 Mo.

$_FILES['monfichier']['tmp_name']
Juste après l'envoi, le fichier est placé 
dans un répertoire temporaire sur le
serveur en attendant que votre script
PHP décide si oui ou non il accepte de
le stocker pour de bon. Cette variable
contient l'emplacement temporaire du
fichier (c'est PHP qui gère ça).

$_FILES['monfichier']['error']
Contient un code d'erreur permettant de savoir si l'envoi s'est bien effectué ou s'il
y a eu un problème et si oui, lequel. La
variable vaut 0 s'il n'y a pas eu d'erreur.
*/


/* Code a taper pour checker la validité des fichiers envoyés par l'utilisateur
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                
                }
        }
}

$_SERVER['REMOTE_ADDR'] obtient l'adresse IP du client qui demande à voir la page

php setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true);

$monfichier = fopen('compteur.txt', 'r+');

// 2 : on fera ici nos opérations sur le fichier...

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);

fputs fgets fseek(fichier, pos)

setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true) pour les cookies
$_SESSION['var'] pour les variables de sessions
start_session() avant tout le code

$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
deux nouveau parametres pour activer les erreurs

?>
*/
        ?>
    </body>
</html>