import os

COR_BRANCA = "\033[1;97m"
COR_VERMELHA = "\033[1;91m"
COR_VERDE = "\033[1;92m"
COR_AZUL = "\033[1;94m"
COR_ROXA = "\033[1;95m"

COR_BRANCA_U = "\033[4;37m"
COR_VERMELHA_U = "\033[4;31m"
COR_VERDE_U = "\033[4;32m"
COR_AZUL_U = "\033[4;34m"
COR_ROXA_U = "\033[4;35m"

NULL = "\033[0m"


def executar_comando(comando):
    os.system(comando)


def definir_configuracoes_container():
    print(f"{COR_BRANCA}Porta Local:{NULL}")
    porta_local = input(f"{COR_BRANCA}-> {NULL}")
    # ----------- 
    print(f"{COR_BRANCA}Porta do Container:{NULL}")
    porta_container = input(f"{COR_BRANCA}-> {NULL}")
    # ----------- 
    print(f"{COR_BRANCA}Nome do Container:{NULL}")
    nome = input(f"{COR_BRANCA}-> {NULL}")
    # ----------- 
    print(f"{COR_BRANCA}Diretório Local:{NULL}")
    dir_local = input(f"{COR_BRANCA}-> {NULL}")
    # ----------- 
    print(f"{COR_BRANCA}Diretório do Container:{NULL}")
    dir_container = input(f"{COR_BRANCA}-> {NULL}")
    # ----------- 
    print(f"{COR_BRANCA}Imagem do Container:{NULL}")
    imagem = input(f"{COR_BRANCA}-> {NULL}")
    
    comando = f"docker run -td --name \"{nome}\" -v {dir_local}:{dir_container} \
    -p {porta_local}:{porta_container} {imagem}"

    return comando


def configuracoes_container(padrao: bool = True):
    if padrao:
        porta_local = "8080"
        porta_container = "80"
        nome = "PHP_APACHE"
        dir_local = "/home/debby/Ambientes de Desenvolvimento/PhpstormProjects"
        dir_container = "/var/www/html"
        '''
        # Caminhos q já usei:
        /usr/local/apache2/htdocs/ #na doc do apache no dockerhub
        /var/www/html #no tutorial do youtube (https://www.youtube.com/watch?v=82E2EUJPdzE)
        /usr/src/myapp -w /usr/src/myapp  #na doc do php no dockerhub
        '''
        imagem = "php:apache"
        comando = f"docker run -td --name \"{nome}\" -v \"{dir_local}\":\"{dir_container}\" \
            -p {porta_local}:{porta_container} {imagem}"
    else:
        comando = definir_configuracoes_container()
    return comando


def criar(comando):
    print(f'{COR_AZUL}{comando}{NULL}')
    while True:
        op = input(f"{COR_BRANCA}\t\t\tCriar? [s/y ou n]")
        if op == "s" or op == "y":
            executar_comando(comando)
            print(f"{COR_VERMELHA}\t\tContainer criado{NULL}")
            executar_comando("docker container ls")
            break
        elif op == "n":
            print(f"{COR_VERMELHA}\t\tContainer não criado{NULL}")
            break


def remover_container(nome_container):
    comando = f"docker container stop {nome_container} ; \
        docker container rm {nome_container}"
    executar_comando(comando)


def mostrar_menu():
    return f'''{COR_VERDE}    ************************************************
    *   Instalador de Ambiente PHP/APACHE v.1      *
    *             ━━━━━━━━ ✤ ━━━━━━━━              *
    * {COR_ROXA}01{COR_VERDE} * {COR_AZUL}Baixar Imagens Docker{COR_VERDE}                   *
    * {COR_ROXA}02{COR_VERDE} * {COR_AZUL}Criar Container (padrão){COR_VERDE}                *
    * {COR_ROXA}03{COR_VERDE} * {COR_AZUL}Remover Container{COR_VERDE}                       *
    * {COR_ROXA}04{COR_VERDE} * {COR_AZUL}Recriar Container{COR_VERDE}                       *
    * {COR_ROXA}05{COR_VERDE} * {COR_AZUL}Criar Container (Customizar Comando){COR_VERDE}    *
    * {COR_ROXA}06{COR_VERDE} * {COR_AZUL}Mostrar Comando de Criação de Container{COR_VERDE} *
    * {COR_ROXA} s{COR_VERDE} * {COR_AZUL}Sair{COR_VERDE}                                    *
    ************************************************
'''


def pegar_nome_container(comando: str):
    comando_separado = comando.split("\"")
    return comando_separado[1]


def baixar_imagens():
    imagens = [
        "php:apache",
        "mysql"
    ]
    comando_docker = "docker pull "
    
    while True:
        print("As imagens que seram baixadas seram: ")
        for imagem in imagens:
            print(imagem)
        print("Concorda com essa imagens?\ns - para baixar todas")
        print("sequencia das imagens para baixar", end="")
        conf = input(": ")
        if conf == "s":
            for imagem in imagens:
                executar_comando(f"{comando_docker}{imagem}")
        elif conf == "sair":
            break
        else:
            print("Outras opções não foram implementadas.\nEscolha 's' ou sair")
    
def main():
    comando_padrão = configuracoes_container()
    nome_container = pegar_nome_container(comando_padrão)
    
    while True:
        executar_comando("clear")
        print(mostrar_menu())
        opcao = input(f"{COR_BRANCA}-> {NULL}")
        if opcao.isnumeric():
            # Baixar Imagens Docker
            if int(opcao) == 1:
                print(f'{COR_ROXA_U}** Você selecionou "Baixar Imagens Docker" **{NULL}\n\n')
                baixar_imagens()
                print(f'{COR_AZUL_U}A operação terminou{NULL}')
                input()
            # Criar Container (padrão)
            elif int(opcao) == 2:
                print(f'{COR_ROXA_U}** Você selecionou "Criar Container (padrão)" **{NULL}\n\n')
                criar(comando_padrão)
                print(f'{COR_AZUL_U}A operação terminou{NULL}')
                input()
            # Remover Container
            elif int(opcao) == 3:
                print(f'{COR_ROXA_U}** Você selecionou "Remover Container" **{NULL}\n\n')
                remover_container(nome_container)
                print(f'{COR_AZUL_U}A operação terminou{NULL}')
                input()
            # Recriar Container
            elif int(opcao) == 4:
                print(f'{COR_ROXA_U}** Você selecionou "Recriar Container" **{NULL}\n\n')
                remover_container(nome_container)
                criar(comando_padrão)
                print(f'{COR_AZUL_U}A operação terminou{NULL}')
                input()
            # Criar Container (Customizar Comando)
            elif int(opcao) == 5:
                print(f'{COR_ROXA_U}** Você selecionou "Criar Container (Customizar Comando)" **{NULL}\n\n')
                comando_customizado = configuracoes_container(False)
                criar(comando_customizado)
                print(f'{COR_AZUL_U}A operação terminou{NULL}')
                input()
            # Mostrar Comando de Criação de Container
            elif int(opcao) == 6:
                print(f'{COR_ROXA_U}** Você selecionou "Mostrar Comando de Criação de Container" **{NULL}\n\n')
                print(f'{COR_AZUL}{comando_padrão}{NULL}')
                print(f'{COR_AZUL_U}A operação terminou{NULL}')
                input()
            else:
                print(f"{COR_VERMELHA}Opção Inválida!{NULL}")
                input()
        elif opcao == "s":
            break
        else:
            print(f"{COR_VERMELHA}Opção Inválida!{NULL}")
            input()


if __name__ == "__main__":
    main()

