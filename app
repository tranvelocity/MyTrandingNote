#!/bin/sh

# Shortcut to execute commands.
docker-compose exec app bash -c "cd /var/www && $(echo $@)"
