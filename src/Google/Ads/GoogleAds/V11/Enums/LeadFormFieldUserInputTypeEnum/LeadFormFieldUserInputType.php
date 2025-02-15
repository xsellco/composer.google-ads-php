<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/lead_form_field_user_input_type.proto

namespace Google\Ads\GoogleAds\V11\Enums\LeadFormFieldUserInputTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing the input type of a lead form field.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.LeadFormFieldUserInputTypeEnum.LeadFormFieldUserInputType</code>
 */
class LeadFormFieldUserInputType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The user will be asked to fill in their given and family name. This field
     * cannot be set at the same time as GIVEN_NAME or FAMILY_NAME.
     *
     * Generated from protobuf enum <code>FULL_NAME = 2;</code>
     */
    const FULL_NAME = 2;
    /**
     * The user will be asked to fill in their email address.
     *
     * Generated from protobuf enum <code>EMAIL = 3;</code>
     */
    const EMAIL = 3;
    /**
     * The user will be asked to fill in their phone number.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER = 4;</code>
     */
    const PHONE_NUMBER = 4;
    /**
     * The user will be asked to fill in their zip code.
     *
     * Generated from protobuf enum <code>POSTAL_CODE = 5;</code>
     */
    const POSTAL_CODE = 5;
    /**
     * The user will be asked to fill in their city.
     *
     * Generated from protobuf enum <code>CITY = 9;</code>
     */
    const CITY = 9;
    /**
     * The user will be asked to fill in their region part of the address (e.g.
     * state for US, province for Canada).
     *
     * Generated from protobuf enum <code>REGION = 10;</code>
     */
    const REGION = 10;
    /**
     * The user will be asked to fill in their country.
     *
     * Generated from protobuf enum <code>COUNTRY = 11;</code>
     */
    const COUNTRY = 11;
    /**
     * The user will be asked to fill in their work email address.
     *
     * Generated from protobuf enum <code>WORK_EMAIL = 12;</code>
     */
    const WORK_EMAIL = 12;
    /**
     * The user will be asked to fill in their company name.
     *
     * Generated from protobuf enum <code>COMPANY_NAME = 13;</code>
     */
    const COMPANY_NAME = 13;
    /**
     * The user will be asked to fill in their work phone.
     *
     * Generated from protobuf enum <code>WORK_PHONE = 14;</code>
     */
    const WORK_PHONE = 14;
    /**
     * The user will be asked to fill in their job title.
     *
     * Generated from protobuf enum <code>JOB_TITLE = 15;</code>
     */
    const JOB_TITLE = 15;
    /**
     * The user will be asked to fill in their CPF for Brazil users.
     *
     * Generated from protobuf enum <code>GOVERNMENT_ISSUED_ID_CPF_BR = 16;</code>
     */
    const GOVERNMENT_ISSUED_ID_CPF_BR = 16;
    /**
     * The user will be asked to fill in their DNI for Argentina users.
     *
     * Generated from protobuf enum <code>GOVERNMENT_ISSUED_ID_DNI_AR = 17;</code>
     */
    const GOVERNMENT_ISSUED_ID_DNI_AR = 17;
    /**
     * The user will be asked to fill in their DNI for Peru users.
     *
     * Generated from protobuf enum <code>GOVERNMENT_ISSUED_ID_DNI_PE = 18;</code>
     */
    const GOVERNMENT_ISSUED_ID_DNI_PE = 18;
    /**
     * The user will be asked to fill in their RUT for Chile users.
     *
     * Generated from protobuf enum <code>GOVERNMENT_ISSUED_ID_RUT_CL = 19;</code>
     */
    const GOVERNMENT_ISSUED_ID_RUT_CL = 19;
    /**
     * The user will be asked to fill in their CC for Colombia users.
     *
     * Generated from protobuf enum <code>GOVERNMENT_ISSUED_ID_CC_CO = 20;</code>
     */
    const GOVERNMENT_ISSUED_ID_CC_CO = 20;
    /**
     * The user will be asked to fill in their CI for Ecuador users.
     *
     * Generated from protobuf enum <code>GOVERNMENT_ISSUED_ID_CI_EC = 21;</code>
     */
    const GOVERNMENT_ISSUED_ID_CI_EC = 21;
    /**
     * The user will be asked to fill in their RFC for Mexico users.
     *
     * Generated from protobuf enum <code>GOVERNMENT_ISSUED_ID_RFC_MX = 22;</code>
     */
    const GOVERNMENT_ISSUED_ID_RFC_MX = 22;
    /**
     * The user will be asked to fill in their first name. This
     * field can not be set at the same time as FULL_NAME.
     *
     * Generated from protobuf enum <code>FIRST_NAME = 23;</code>
     */
    const FIRST_NAME = 23;
    /**
     * The user will be asked to fill in their last name. This
     * field can not be set at the same time as FULL_NAME.
     *
     * Generated from protobuf enum <code>LAST_NAME = 24;</code>
     */
    const LAST_NAME = 24;
    /**
     * Question: "Which model are you interested in?"
     * Category: "Auto"
     *
     * Generated from protobuf enum <code>VEHICLE_MODEL = 1001;</code>
     */
    const VEHICLE_MODEL = 1001;
    /**
     * Question: "Which type of vehicle are you interested in?"
     * Category: "Auto"
     *
     * Generated from protobuf enum <code>VEHICLE_TYPE = 1002;</code>
     */
    const VEHICLE_TYPE = 1002;
    /**
     * Question: "What is your preferred dealership?"
     * Category: "Auto"
     *
     * Generated from protobuf enum <code>PREFERRED_DEALERSHIP = 1003;</code>
     */
    const PREFERRED_DEALERSHIP = 1003;
    /**
     * Question: "When do you plan on purchasing a vehicle?"
     * Category: "Auto"
     *
     * Generated from protobuf enum <code>VEHICLE_PURCHASE_TIMELINE = 1004;</code>
     */
    const VEHICLE_PURCHASE_TIMELINE = 1004;
    /**
     * Question: "Do you own a vehicle?"
     * Category: "Auto"
     *
     * Generated from protobuf enum <code>VEHICLE_OWNERSHIP = 1005;</code>
     */
    const VEHICLE_OWNERSHIP = 1005;
    /**
     * Question: "What vehicle ownership option are you interested in?"
     * Category: "Auto"
     *
     * Generated from protobuf enum <code>VEHICLE_PAYMENT_TYPE = 1009;</code>
     */
    const VEHICLE_PAYMENT_TYPE = 1009;
    /**
     * Question: "What type of vehicle condition are you interested in?"
     * Category: "Auto"
     *
     * Generated from protobuf enum <code>VEHICLE_CONDITION = 1010;</code>
     */
    const VEHICLE_CONDITION = 1010;
    /**
     * Question: "What size is your company?"
     * Category: "Business"
     *
     * Generated from protobuf enum <code>COMPANY_SIZE = 1006;</code>
     */
    const COMPANY_SIZE = 1006;
    /**
     * Question: "What is your annual sales volume?"
     * Category: "Business"
     *
     * Generated from protobuf enum <code>ANNUAL_SALES = 1007;</code>
     */
    const ANNUAL_SALES = 1007;
    /**
     * Question: "How many years have you been in business?"
     * Category: "Business"
     *
     * Generated from protobuf enum <code>YEARS_IN_BUSINESS = 1008;</code>
     */
    const YEARS_IN_BUSINESS = 1008;
    /**
     * Question: "What is your job department?"
     * Category: "Business"
     *
     * Generated from protobuf enum <code>JOB_DEPARTMENT = 1011;</code>
     */
    const JOB_DEPARTMENT = 1011;
    /**
     * Question: "What is your job role?"
     * Category: "Business"
     *
     * Generated from protobuf enum <code>JOB_ROLE = 1012;</code>
     */
    const JOB_ROLE = 1012;
    /**
     * Question: "Which program are you interested in?"
     * Category: "Education"
     *
     * Generated from protobuf enum <code>EDUCATION_PROGRAM = 1013;</code>
     */
    const EDUCATION_PROGRAM = 1013;
    /**
     * Question: "Which course are you interested in?"
     * Category: "Education"
     *
     * Generated from protobuf enum <code>EDUCATION_COURSE = 1014;</code>
     */
    const EDUCATION_COURSE = 1014;
    /**
     * Question: "Which product are you interested in?"
     * Category: "General"
     *
     * Generated from protobuf enum <code>PRODUCT = 1016;</code>
     */
    const PRODUCT = 1016;
    /**
     * Question: "Which service are you interested in?"
     * Category: "General"
     *
     * Generated from protobuf enum <code>SERVICE = 1017;</code>
     */
    const SERVICE = 1017;
    /**
     * Question: "Which offer are you interested in?"
     * Category: "General"
     *
     * Generated from protobuf enum <code>OFFER = 1018;</code>
     */
    const OFFER = 1018;
    /**
     * Question: "Which category are you interested in?"
     * Category: "General"
     *
     * Generated from protobuf enum <code>CATEGORY = 1019;</code>
     */
    const CATEGORY = 1019;
    /**
     * Question: "What is your preferred method of contact?"
     * Category: "General"
     *
     * Generated from protobuf enum <code>PREFERRED_CONTACT_METHOD = 1020;</code>
     */
    const PREFERRED_CONTACT_METHOD = 1020;
    /**
     * Question: "What is your preferred location?"
     * Category: "General"
     *
     * Generated from protobuf enum <code>PREFERRED_LOCATION = 1021;</code>
     */
    const PREFERRED_LOCATION = 1021;
    /**
     * Question: "What is the best time to contact you?"
     * Category: "General"
     *
     * Generated from protobuf enum <code>PREFERRED_CONTACT_TIME = 1022;</code>
     */
    const PREFERRED_CONTACT_TIME = 1022;
    /**
     * Question: "When are you looking to make a purchase?"
     * Category: "General"
     *
     * Generated from protobuf enum <code>PURCHASE_TIMELINE = 1023;</code>
     */
    const PURCHASE_TIMELINE = 1023;
    /**
     * Question: "How many years of work experience do you have?"
     * Category: "Jobs"
     *
     * Generated from protobuf enum <code>YEARS_OF_EXPERIENCE = 1048;</code>
     */
    const YEARS_OF_EXPERIENCE = 1048;
    /**
     * Question: "What industry do you work in?"
     * Category: "Jobs"
     *
     * Generated from protobuf enum <code>JOB_INDUSTRY = 1049;</code>
     */
    const JOB_INDUSTRY = 1049;
    /**
     * Question: "What is your highest level of education?"
     * Category: "Jobs"
     *
     * Generated from protobuf enum <code>LEVEL_OF_EDUCATION = 1050;</code>
     */
    const LEVEL_OF_EDUCATION = 1050;
    /**
     * Question: "What type of property are you looking for?"
     * Category: "Real Estate"
     *
     * Generated from protobuf enum <code>PROPERTY_TYPE = 1024;</code>
     */
    const PROPERTY_TYPE = 1024;
    /**
     * Question: "What do you need a realtor's help with?"
     * Category: "Real Estate"
     *
     * Generated from protobuf enum <code>REALTOR_HELP_GOAL = 1025;</code>
     */
    const REALTOR_HELP_GOAL = 1025;
    /**
     * Question: "What neighborhood are you interested in?"
     * Category: "Real Estate"
     *
     * Generated from protobuf enum <code>PROPERTY_COMMUNITY = 1026;</code>
     */
    const PROPERTY_COMMUNITY = 1026;
    /**
     * Question: "What price range are you looking for?"
     * Category: "Real Estate"
     *
     * Generated from protobuf enum <code>PRICE_RANGE = 1027;</code>
     */
    const PRICE_RANGE = 1027;
    /**
     * Question: "How many bedrooms are you looking for?"
     * Category: "Real Estate"
     *
     * Generated from protobuf enum <code>NUMBER_OF_BEDROOMS = 1028;</code>
     */
    const NUMBER_OF_BEDROOMS = 1028;
    /**
     * Question: "Are you looking for a fully furnished property?"
     * Category: "Real Estate"
     *
     * Generated from protobuf enum <code>FURNISHED_PROPERTY = 1029;</code>
     */
    const FURNISHED_PROPERTY = 1029;
    /**
     * Question: "Are you looking for properties that allow pets?"
     * Category: "Real Estate"
     *
     * Generated from protobuf enum <code>PETS_ALLOWED_PROPERTY = 1030;</code>
     */
    const PETS_ALLOWED_PROPERTY = 1030;
    /**
     * Question: "What is the next product you plan to purchase?"
     * Category: "Retail"
     *
     * Generated from protobuf enum <code>NEXT_PLANNED_PURCHASE = 1031;</code>
     */
    const NEXT_PLANNED_PURCHASE = 1031;
    /**
     * Question: "Would you like to sign up for an event?"
     * Category: "Retail"
     *
     * Generated from protobuf enum <code>EVENT_SIGNUP_INTEREST = 1033;</code>
     */
    const EVENT_SIGNUP_INTEREST = 1033;
    /**
     * Question: "Where are you interested in shopping?"
     * Category: "Retail"
     *
     * Generated from protobuf enum <code>PREFERRED_SHOPPING_PLACES = 1034;</code>
     */
    const PREFERRED_SHOPPING_PLACES = 1034;
    /**
     * Question: "What is your favorite brand?"
     * Category: "Retail"
     *
     * Generated from protobuf enum <code>FAVORITE_BRAND = 1035;</code>
     */
    const FAVORITE_BRAND = 1035;
    /**
     * Question: "Which type of valid commercial license do you have?"
     * Category: "Transportation"
     *
     * Generated from protobuf enum <code>TRANSPORTATION_COMMERCIAL_LICENSE_TYPE = 1036;</code>
     */
    const TRANSPORTATION_COMMERCIAL_LICENSE_TYPE = 1036;
    /**
     * Question: "Interested in booking an event?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>EVENT_BOOKING_INTEREST = 1038;</code>
     */
    const EVENT_BOOKING_INTEREST = 1038;
    /**
     * Question: "What is your destination country?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>DESTINATION_COUNTRY = 1039;</code>
     */
    const DESTINATION_COUNTRY = 1039;
    /**
     * Question: "What is your destination city?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>DESTINATION_CITY = 1040;</code>
     */
    const DESTINATION_CITY = 1040;
    /**
     * Question: "What is your departure country?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>DEPARTURE_COUNTRY = 1041;</code>
     */
    const DEPARTURE_COUNTRY = 1041;
    /**
     * Question: "What is your departure city?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>DEPARTURE_CITY = 1042;</code>
     */
    const DEPARTURE_CITY = 1042;
    /**
     * Question: "What is your departure date?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>DEPARTURE_DATE = 1043;</code>
     */
    const DEPARTURE_DATE = 1043;
    /**
     * Question: "What is your return date?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>RETURN_DATE = 1044;</code>
     */
    const RETURN_DATE = 1044;
    /**
     * Question: "How many people are you traveling with?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>NUMBER_OF_TRAVELERS = 1045;</code>
     */
    const NUMBER_OF_TRAVELERS = 1045;
    /**
     * Question: "What is your travel budget?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>TRAVEL_BUDGET = 1046;</code>
     */
    const TRAVEL_BUDGET = 1046;
    /**
     * Question: "Where do you want to stay during your travel?"
     * Category: "Travel"
     *
     * Generated from protobuf enum <code>TRAVEL_ACCOMMODATION = 1047;</code>
     */
    const TRAVEL_ACCOMMODATION = 1047;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::FULL_NAME => 'FULL_NAME',
        self::EMAIL => 'EMAIL',
        self::PHONE_NUMBER => 'PHONE_NUMBER',
        self::POSTAL_CODE => 'POSTAL_CODE',
        self::CITY => 'CITY',
        self::REGION => 'REGION',
        self::COUNTRY => 'COUNTRY',
        self::WORK_EMAIL => 'WORK_EMAIL',
        self::COMPANY_NAME => 'COMPANY_NAME',
        self::WORK_PHONE => 'WORK_PHONE',
        self::JOB_TITLE => 'JOB_TITLE',
        self::GOVERNMENT_ISSUED_ID_CPF_BR => 'GOVERNMENT_ISSUED_ID_CPF_BR',
        self::GOVERNMENT_ISSUED_ID_DNI_AR => 'GOVERNMENT_ISSUED_ID_DNI_AR',
        self::GOVERNMENT_ISSUED_ID_DNI_PE => 'GOVERNMENT_ISSUED_ID_DNI_PE',
        self::GOVERNMENT_ISSUED_ID_RUT_CL => 'GOVERNMENT_ISSUED_ID_RUT_CL',
        self::GOVERNMENT_ISSUED_ID_CC_CO => 'GOVERNMENT_ISSUED_ID_CC_CO',
        self::GOVERNMENT_ISSUED_ID_CI_EC => 'GOVERNMENT_ISSUED_ID_CI_EC',
        self::GOVERNMENT_ISSUED_ID_RFC_MX => 'GOVERNMENT_ISSUED_ID_RFC_MX',
        self::FIRST_NAME => 'FIRST_NAME',
        self::LAST_NAME => 'LAST_NAME',
        self::VEHICLE_MODEL => 'VEHICLE_MODEL',
        self::VEHICLE_TYPE => 'VEHICLE_TYPE',
        self::PREFERRED_DEALERSHIP => 'PREFERRED_DEALERSHIP',
        self::VEHICLE_PURCHASE_TIMELINE => 'VEHICLE_PURCHASE_TIMELINE',
        self::VEHICLE_OWNERSHIP => 'VEHICLE_OWNERSHIP',
        self::VEHICLE_PAYMENT_TYPE => 'VEHICLE_PAYMENT_TYPE',
        self::VEHICLE_CONDITION => 'VEHICLE_CONDITION',
        self::COMPANY_SIZE => 'COMPANY_SIZE',
        self::ANNUAL_SALES => 'ANNUAL_SALES',
        self::YEARS_IN_BUSINESS => 'YEARS_IN_BUSINESS',
        self::JOB_DEPARTMENT => 'JOB_DEPARTMENT',
        self::JOB_ROLE => 'JOB_ROLE',
        self::EDUCATION_PROGRAM => 'EDUCATION_PROGRAM',
        self::EDUCATION_COURSE => 'EDUCATION_COURSE',
        self::PRODUCT => 'PRODUCT',
        self::SERVICE => 'SERVICE',
        self::OFFER => 'OFFER',
        self::CATEGORY => 'CATEGORY',
        self::PREFERRED_CONTACT_METHOD => 'PREFERRED_CONTACT_METHOD',
        self::PREFERRED_LOCATION => 'PREFERRED_LOCATION',
        self::PREFERRED_CONTACT_TIME => 'PREFERRED_CONTACT_TIME',
        self::PURCHASE_TIMELINE => 'PURCHASE_TIMELINE',
        self::YEARS_OF_EXPERIENCE => 'YEARS_OF_EXPERIENCE',
        self::JOB_INDUSTRY => 'JOB_INDUSTRY',
        self::LEVEL_OF_EDUCATION => 'LEVEL_OF_EDUCATION',
        self::PROPERTY_TYPE => 'PROPERTY_TYPE',
        self::REALTOR_HELP_GOAL => 'REALTOR_HELP_GOAL',
        self::PROPERTY_COMMUNITY => 'PROPERTY_COMMUNITY',
        self::PRICE_RANGE => 'PRICE_RANGE',
        self::NUMBER_OF_BEDROOMS => 'NUMBER_OF_BEDROOMS',
        self::FURNISHED_PROPERTY => 'FURNISHED_PROPERTY',
        self::PETS_ALLOWED_PROPERTY => 'PETS_ALLOWED_PROPERTY',
        self::NEXT_PLANNED_PURCHASE => 'NEXT_PLANNED_PURCHASE',
        self::EVENT_SIGNUP_INTEREST => 'EVENT_SIGNUP_INTEREST',
        self::PREFERRED_SHOPPING_PLACES => 'PREFERRED_SHOPPING_PLACES',
        self::FAVORITE_BRAND => 'FAVORITE_BRAND',
        self::TRANSPORTATION_COMMERCIAL_LICENSE_TYPE => 'TRANSPORTATION_COMMERCIAL_LICENSE_TYPE',
        self::EVENT_BOOKING_INTEREST => 'EVENT_BOOKING_INTEREST',
        self::DESTINATION_COUNTRY => 'DESTINATION_COUNTRY',
        self::DESTINATION_CITY => 'DESTINATION_CITY',
        self::DEPARTURE_COUNTRY => 'DEPARTURE_COUNTRY',
        self::DEPARTURE_CITY => 'DEPARTURE_CITY',
        self::DEPARTURE_DATE => 'DEPARTURE_DATE',
        self::RETURN_DATE => 'RETURN_DATE',
        self::NUMBER_OF_TRAVELERS => 'NUMBER_OF_TRAVELERS',
        self::TRAVEL_BUDGET => 'TRAVEL_BUDGET',
        self::TRAVEL_ACCOMMODATION => 'TRAVEL_ACCOMMODATION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LeadFormFieldUserInputType::class, \Google\Ads\GoogleAds\V11\Enums\LeadFormFieldUserInputTypeEnum_LeadFormFieldUserInputType::class);

