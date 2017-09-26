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


class ExtensiveTrainSearchResult(object):
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
        'origin': 'Station',
        'destination': 'Station',
        'itineraries': 'list[TrainSearchItinerary]'
    }

    attribute_map = {
        'origin': 'origin',
        'destination': 'destination',
        'itineraries': 'itineraries'
    }

    def __init__(self, origin=None, destination=None, itineraries=None):
        """
        ExtensiveTrainSearchResult - a model defined in Swagger
        """

        self._origin = None
        self._destination = None
        self._itineraries = None

        self.origin = origin
        self.destination = destination
        self.itineraries = itineraries

    @property
    def origin(self):
        """
        Gets the origin of this ExtensiveTrainSearchResult.
        Station object with details about the origin station for this search.

        :return: The origin of this ExtensiveTrainSearchResult.
        :rtype: Station
        """
        return self._origin

    @origin.setter
    def origin(self, origin):
        """
        Sets the origin of this ExtensiveTrainSearchResult.
        Station object with details about the origin station for this search.

        :param origin: The origin of this ExtensiveTrainSearchResult.
        :type: Station
        """
        if origin is None:
            raise ValueError("Invalid value for `origin`, must not be `None`")

        self._origin = origin

    @property
    def destination(self):
        """
        Gets the destination of this ExtensiveTrainSearchResult.
        Station object with details about the destination station for this search.

        :return: The destination of this ExtensiveTrainSearchResult.
        :rtype: Station
        """
        return self._destination

    @destination.setter
    def destination(self, destination):
        """
        Sets the destination of this ExtensiveTrainSearchResult.
        Station object with details about the destination station for this search.

        :param destination: The destination of this ExtensiveTrainSearchResult.
        :type: Station
        """
        if destination is None:
            raise ValueError("Invalid value for `destination`, must not be `None`")

        self._destination = destination

    @property
    def itineraries(self):
        """
        Gets the itineraries of this ExtensiveTrainSearchResult.
        Routes from the origin to the destination.

        :return: The itineraries of this ExtensiveTrainSearchResult.
        :rtype: list[TrainSearchItinerary]
        """
        return self._itineraries

    @itineraries.setter
    def itineraries(self, itineraries):
        """
        Sets the itineraries of this ExtensiveTrainSearchResult.
        Routes from the origin to the destination.

        :param itineraries: The itineraries of this ExtensiveTrainSearchResult.
        :type: list[TrainSearchItinerary]
        """
        if itineraries is None:
            raise ValueError("Invalid value for `itineraries`, must not be `None`")

        self._itineraries = itineraries

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
        if not isinstance(other, ExtensiveTrainSearchResult):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
