path=$(printf '%s\n' "${PWD##*/}")
command="docker exec ${path}_laravel.test-1 php "$@""
echo "Running php on docker ${path}_laravel.test-1"
$command
