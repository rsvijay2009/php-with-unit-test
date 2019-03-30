#!/usr/bin/python
def get_jenkins_latest_release_version():
   return "Yes"

def get_current_installed_jenkins_version():
    return "Yes"

def main():
    # Get Jenkins Latest version
    latest_version = get_jenkins_latest_release_version()

    # Get Installed Jenkins Version
    installed_version = get_current_installed_jenkins_version()

    if latest_version == installed_version:
        print('You are alright!!!')
    else:
        print('Something went wrong!!!')

if __name__ == "__main__":
    # calling main function
    main()