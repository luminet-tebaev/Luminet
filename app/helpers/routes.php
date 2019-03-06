<?php

    route('GET', "/", "index");
    route('GET', "/login", "login");
    route('GET', "/biblioteca", "biblioteca");
    route('GET', "/recursos-pedagogicos", "recursos-pedagogicos");
    route('GET', "/videotecacomplementaria", "videotecacomplementaria");
    route('GET', "/videotecaoficial", "videotecaoficial");
    route('GET', "/subir-recursos", "subir-recursos");
    route('GET', "/manuales", "manuales");

    notFound();
