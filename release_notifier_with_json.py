import json
from datetime import *


def get_release_info():
    now = datetime.now()
    get_release_date = now + timedelta(days=5)
    format_release_date = '{0.day}/{0.month}/{0.year}'.format(get_release_date)
    split_date = format_release_date.split('/')
    expected_release_date = datetime(int(split_date[2]), int(split_date[1]), int(split_date[0]))

    with open('release_data.json', 'r') as f:
        release_data_dict = json.load(f)

        for release_data in release_data_dict:
            name = release_data['name']
            release_date = release_data['release_date']
            split_csv_date = release_data['release_date'].split('/')
            release_date_from_csv = datetime(int(split_csv_date[2]), int(split_csv_date[1]), int(split_csv_date[0]))

            if expected_release_date == release_date_from_csv:
                print('@%s please prepare the following for the upcoming release on %s ?\n\n'
                      '1. Create release branch in GitHub \n\n'
                      '2. Create Change Request in HSD Portal https://hsd.emishealth.com \n\n'
                      '3. Publish release content here https://tinyurl.com/y5rz77e3'
                      % (name, release_date)
                      )
                break


def main():
    # Get upcoming release info
    get_release_info()


if __name__ == '__main__':
    # calling main function
    main()
