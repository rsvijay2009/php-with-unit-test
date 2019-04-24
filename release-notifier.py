import csv
from datetime import *


def get_release_info():
    now = datetime.now()
    get_release_date = now + timedelta(days=7)
    format_release_date = '{0.day}/{0.month}/{0.year}'.format(get_release_date)

    split_date = format_release_date.split("/")
    expected_release_date = datetime(int(split_date[2]), int(split_date[1]), int(split_date[0]))

    with open('release_info.csv') as csvfile:
        read_csv = csv.reader(csvfile)
        next(read_csv)
        for row in read_csv:
            name = row[0]
            date = row[1]
            split_csv_date = date.split("/")
            release_date_from_csv = datetime(int(split_csv_date[2]), int(split_csv_date[1]), int(split_csv_date[0]))

            if expected_release_date == release_date_from_csv:
                print("@%s Have you prepared the below things for the upcoming release on %s ? \n\n"
                      "1. Create release branch in GitHub \n\n"
                      "2. Create Change Request in HSD Portal \n\n"
                      "3. Post the release content in workplace"
                      % (name, date)
                      )
                break

def main():

    # Get upcoming release info
    get_release_info()


if __name__ == "__main__":
    # calling main function
    main()
