# coding: utf-8

"""
    Amadeus Travel Innovation Sandbox

    No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

    OpenAPI spec version: 1.2
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class AirportInformation(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'code': 'str',
        'name': 'str',
        'city_code': 'str',
        'city_name': 'str',
        'state': 'str',
        'country': 'str',
        'location': 'Geolocation',
        'aircraft_movements': 'int',
        'timezone': 'str'
    }

    attribute_map = {
        'code': 'code',
        'name': 'name',
        'city_code': 'city_code',
        'city_name': 'city_name',
        'state': 'state',
        'country': 'country',
        'location': 'location',
        'aircraft_movements': 'aircraft_movements',
        'timezone': 'timezone'
    }

    def __init__(self, code=None, name=None, city_code=None, city_name=None, state=None, country=None, location=None, aircraft_movements=None, timezone=None):
        """
        AirportInformation - a model defined in Swagger
        """

        self._code = None
        self._name = None
        self._city_code = None
        self._city_name = None
        self._state = None
        self._country = None
        self._location = None
        self._aircraft_movements = None
        self._timezone = None

        self.code = code
        self.name = name
        self.city_code = city_code
        self.city_name = city_name
        if state is not None:
          self.state = state
        self.country = country
        self.location = location
        if aircraft_movements is not None:
          self.aircraft_movements = aircraft_movements
        self.timezone = timezone

    @property
    def code(self):
        """
        Gets the code of this AirportInformation.
        The 3 letter IATA airport code of this given airport. You can use this as an input parameter for a low-fare flight search, to get more specific results than the city code, but inspiration search works best using the city code.

        :return: The code of this AirportInformation.
        :rtype: str
        """
        return self._code

    @code.setter
    def code(self, code):
        """
        Sets the code of this AirportInformation.
        The 3 letter IATA airport code of this given airport. You can use this as an input parameter for a low-fare flight search, to get more specific results than the city code, but inspiration search works best using the city code.

        :param code: The code of this AirportInformation.
        :type: str
        """
        if code is None:
            raise ValueError("Invalid value for `code`, must not be `None`")

        self._code = code

    @property
    def name(self):
        """
        Gets the name of this AirportInformation.
        The name of this airport, in UTF-8 format

        :return: The name of this AirportInformation.
        :rtype: str
        """
        return self._name

    @name.setter
    def name(self, name):
        """
        Sets the name of this AirportInformation.
        The name of this airport, in UTF-8 format

        :param name: The name of this AirportInformation.
        :type: str
        """
        if name is None:
            raise ValueError("Invalid value for `name`, must not be `None`")

        self._name = name

    @property
    def city_code(self):
        """
        Gets the city_code of this AirportInformation.
        The three letter <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city of the city in which this airport is located.

        :return: The city_code of this AirportInformation.
        :rtype: str
        """
        return self._city_code

    @city_code.setter
    def city_code(self, city_code):
        """
        Sets the city_code of this AirportInformation.
        The three letter <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city of the city in which this airport is located.

        :param city_code: The city_code of this AirportInformation.
        :type: str
        """
        if city_code is None:
            raise ValueError("Invalid value for `city_code`, must not be `None`")

        self._city_code = city_code

    @property
    def city_name(self):
        """
        Gets the city_name of this AirportInformation.
        The English name of the city in which this airport is located

        :return: The city_name of this AirportInformation.
        :rtype: str
        """
        return self._city_name

    @city_name.setter
    def city_name(self, city_name):
        """
        Sets the city_name of this AirportInformation.
        The English name of the city in which this airport is located

        :param city_name: The city_name of this AirportInformation.
        :type: str
        """
        if city_name is None:
            raise ValueError("Invalid value for `city_name`, must not be `None`")

        self._city_name = city_name

    @property
    def state(self):
        """
        Gets the state of this AirportInformation.
        The state code of this city, if applicable

        :return: The state of this AirportInformation.
        :rtype: str
        """
        return self._state

    @state.setter
    def state(self, state):
        """
        Sets the state of this AirportInformation.
        The state code of this city, if applicable

        :param state: The state of this AirportInformation.
        :type: str
        """

        self._state = state

    @property
    def country(self):
        """
        Gets the country of this AirportInformation.
        The <a href=\"http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2\">ISO 3166-1 alpha-2 country code</a> in which this city can be found.

        :return: The country of this AirportInformation.
        :rtype: str
        """
        return self._country

    @country.setter
    def country(self, country):
        """
        Sets the country of this AirportInformation.
        The <a href=\"http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2\">ISO 3166-1 alpha-2 country code</a> in which this city can be found.

        :param country: The country of this AirportInformation.
        :type: str
        """
        if country is None:
            raise ValueError("Invalid value for `country`, must not be `None`")

        self._country = country

    @property
    def location(self):
        """
        Gets the location of this AirportInformation.
          An object containing the longitude and latitude of the given airport.

        :return: The location of this AirportInformation.
        :rtype: Geolocation
        """
        return self._location

    @location.setter
    def location(self, location):
        """
        Sets the location of this AirportInformation.
          An object containing the longitude and latitude of the given airport.

        :param location: The location of this AirportInformation.
        :type: Geolocation
        """
        if location is None:
            raise ValueError("Invalid value for `location`, must not be `None`")

        self._location = location

    @property
    def aircraft_movements(self):
        """
        Gets the aircraft_movements of this AirportInformation.
        The annual number of aircraft movements at that airport.

        :return: The aircraft_movements of this AirportInformation.
        :rtype: int
        """
        return self._aircraft_movements

    @aircraft_movements.setter
    def aircraft_movements(self, aircraft_movements):
        """
        Sets the aircraft_movements of this AirportInformation.
        The annual number of aircraft movements at that airport.

        :param aircraft_movements: The aircraft_movements of this AirportInformation.
        :type: int
        """

        self._aircraft_movements = aircraft_movements

    @property
    def timezone(self):
        """
        Gets the timezone of this AirportInformation.
        The <a href=\"http://en.wikipedia.org/wiki/List_of_tz_database_time_zones\">Olson format</a> name of the timezone in which this airport is located

        :return: The timezone of this AirportInformation.
        :rtype: str
        """
        return self._timezone

    @timezone.setter
    def timezone(self, timezone):
        """
        Sets the timezone of this AirportInformation.
        The <a href=\"http://en.wikipedia.org/wiki/List_of_tz_database_time_zones\">Olson format</a> name of the timezone in which this airport is located

        :param timezone: The timezone of this AirportInformation.
        :type: str
        """
        if timezone is None:
            raise ValueError("Invalid value for `timezone`, must not be `None`")

        self._timezone = timezone

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, AirportInformation):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
