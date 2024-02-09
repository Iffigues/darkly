# Git README

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

