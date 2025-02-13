# Git README

#42 #Darkly #42Darkly #Darkly42 

School 42 Darkly project

Darkly Project security project.

Les Vm à l'école 42 sont lourdes et prennent souvent toute la place.


quelque projet à l'école 42 sont à lancer sur des VMs.


Malheureusement, cela use l'espace disque.


Les images Dockers sont bien moin gourmandes en mémoire et en puisssance.


C'est pourquoi, j'ai eu l'idée de transposer l'iso Darkly en image Docker.


Afin de pouvoir lancer la plateforme web Darkly sur une image Docker à faible cout.


## Pour lancer la machine darkly sur un docker: 

```
docker pull iffigues/darkly42
docker run -it iffigues/darkly42 bash
```

## Ou sinon, pour lancer la plateforme web darkly sur un docker: 

parce que c'est mieux que sur une lourde VM

```
docker pull iffigues/darkly42web
  docker run -d -p <your-port-number>:80 -it -t iffigues/darkly42web

exemple:
  docker run -d -p 80:80 -it -t iffigues/darkly42web
```
