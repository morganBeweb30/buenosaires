
? questions/réflexions/recherches



## CODE 


### Erreurs
#### Bloquantes

#### Non bloquantes

*  import acte : 2021-02-04 13:40:04 [ERROR] ba-tp@chatnoir.lautre.net > Aucun nouvel id trouvé pour l'insert dans (pas d'info derrière) (* plusieurs fois pour colonne différentes)    
(file:///home/morgan/internet/buenosaires/morgan/Capture-error_log-import-acte-210204.png)[Capture-error_log-import-acte-210204.png]    

*   export actes : 2021-02-04 13:40:04 [ERROR] ba-tp@chatnoir.lautre.net > SQL error : Incorrect integer value: '' for column 'nom_id' at row 1 (* plusieurs fois pour colonne différentes)       
(file:///home/morgan/internet/buenosaires/morgan/Capture-error_log-import2-acte-210204.png)[Capture-error_log-import2-acte-210204.png]    


### Warnings

*  Warning: Declaration of Database::query($requete) should be compatible with mysqli::query($query, $resultmode = NULL) in /home/morgan/internet/buenosaires/src/class/io/Database.php on line 138   

*  Warning: count(): Parameter must be an array or an object that implements Countable in /home/morgan/internet/buenosaires/src/class/io/Database.php on line 42    

*  Pareil dans Database.php on line 44    


### Notices

*  Notice: Undefined property: Prenom::$table_name in /home/morgan/internet/buenosaires/src/class/io/Database.php on line 571
et pour chaque colonne, en important un fichier .xml
L'import a l'air de se faire correctement.


### Autres

Export fichiers "toutes les relations" ne comporte pas de données. Dans ma BDD j'ai l'acte de mariage de Belgrano et celui d'une de ses filles. Il ne devrait pas y avoir au moins une relation entre eux 2 ?


## TECHNOS V2.1


**Bibliothèques**
    



## TECHNOS V2.0


**Bibliothèques**
    



## RECHERCHES

**Bibliothèques**

*  ? Lodash/underscore VS ES6 ?
doc lodash : (https://lodash.com/docs/)[https://lodash.com/docs/]
Comparatif lodash / ES6 : (https://blog.arca-computing.fr/lodash-underscore-vs-es6/)[https://blog.arca-computing.fr/lodash-underscore-vs-es6/]

    
*  ? voir si possible de faire genre de libraries ou helpers ?    



# EXTRA

? Redux ?

