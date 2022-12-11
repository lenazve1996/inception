#!/bin/bash
docker build -t nginx:0.0.1 .
docker compose -f docker-compose.yml up -d