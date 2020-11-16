# projet2-OpenClassrooms front-end program
Le but de ce porjet et d'implémenter un CI github vers mon vps, dans le but dans un prochain projet de mettre des testes au niveau du CI
## Setup

### Install phpMyAdmin on VPS

Get tar.gz of [phpmyadmin](https://www.phpmyadmin.net/) in folder html to get url as `monsite.fr/phpmyadmin`

```bash
$ wget https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz
$ tar xzf phpMyAdmin-4.9.5-all-languages.tar.gz
$ rm -rf phpMyAdmin-4.9.5-all-languages.tar.gz
$ mv phpMyAdmin-4.9.5-all-languages phpmyadmin
```

Now create user by mariaDB:

```bash
$ mysql -u root -p
```

set a user and a database

```bash
> CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';
> CREATE DATABASE 'database';
> GRANT ALL PRIVILEGES ON 'database'.* TO 'user'@'localhost';
> FLUSH PRIVILEGES;
> exit;
```

### install wordPress on VPS

Get tar.gz [wordpress](https://wordpress.org/download/) in folder html to get url as `monsite.fr/projet2-OpenClassrooms`

```bash
$ wget https://wordpress.org/latest.tar.gz
$ tar xzf latest.tar.gz
$ rm -rf latest.tar.gz
$ mv latest projet2-OpenClassrooms
```

Now go to url `monsite.fr/projet2-OpenClassrooms` and set up wordpress website with your database

### Config CI(COntinous integratation) git hub

Go on your repository on github > setting > secret > New secret
- Name: `SSH_PRIVATE_KEY`
- Value: your private key ssh

Go in action and choose your workflow (me php)
I use wordpress so i don't really need pipeline, so i remove composer steps

I follow this file without install and remove part [here](https://gist.github.com/Einenlum/584c12b544b879f0d0489049cca9d124)

set your port in `'ssh -p <port> -o StrictHostKeyChecking=no'`

Do a push and see in action part of your repository

## Project 2 OpenClassrooms front end developer

### Client wish

So I have to do a website for a property center `Chalets et caviar`

- Requirement:
    - Update website without help (==> CMS here wordpress)
        - Clean and clear design
	    - A section with 5 chalets for rent
	        - A section with 5 chalets for sale
		    - A contact page with
		            - Contact details of the agency
			            - A functional contact form
				        - Account
					        - 1 Admin
						        - 1 Developer (admin)
							        - 2 Editors for collab
								    - Pdf of instructions to Update site

- Content:
    - A pdf with chalets information's
        - A folder with pictures

### Deliverable to validate this projet

In zip folder:
- le code HTML / CSS / PHP complet du site web Wordpress ;
- l’URL du site hébergé en ligne ;
- la documentation PDF d'utilisation du site Wordpress pour l'agence ;
- un fichier présentant le thème choisi et expliquant pourquoi il a été choisi


## contribution
- images:
OpenClassrooms
Photo by Antonino Visalli on Unsplash
Photo by Roberto Nickson on Unsplash
Photo byH rvoje_Photography 🇭🇷 on Unsplash

[Pour compresser les images gratuitement](https://compressor.io/) 