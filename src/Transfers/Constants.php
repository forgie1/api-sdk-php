<?php

namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 */
class Constants
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const TYPE_BOOL = 'Bool';
    const TYPE_EAN = 'Ean';
    const TYPE_FEATURE = 'Feature';
    const TYPE_FLOAT = 'Float';
    const TYPE_INT = 'Int';
    const TYPE_SHORT_TEXT = 'ShortText';
    const TYPE_SMALL_TEXT = 'SmallText';
    const TYPE_TEXT = 'Text';
    const TYPE_TINY_TEXT = 'TinyText';
    const TYPE_TRACK = 'Track';
    const TYPE_URL = 'Url';
    const TYPE_DATE = 'Date';
    const TYPE_ITEM = 'Item';
    const TYPE_PICTURE = 'Picture';
    const TYPE_SI_EUROCENT = 'Si_Eurocent';
    const TYPE_SI_AMPERE = 'Si_Ampere';
    const TYPE_SI_AMPERE_HOUR = 'Si_AmpereHour';
    const TYPE_SI_BAR = 'Si_Bar';
    const TYPE_SI_BEL = 'Si_Bel';
    const TYPE_SI_BYTE = 'Si_Byte';
    const TYPE_SI_CUBIC_METER = 'Si_CubicMeter';
    const TYPE_SI_CUBIC_METER_PER_HOUR = 'Si_CubicMeterPerHour';
    const TYPE_SI_DEGREE_CELSIUS = 'Si_DegreeCelsius';
    const TYPE_SI_HERZ = 'Si_Herz';
    const TYPE_SI_HORSE_POWER = 'Si_HorsePower';
    const TYPE_SI_INCH = 'Si_Inch';
    const TYPE_SI_KELVIN = 'Si_Kelvin';
    const TYPE_SI_KILOGRAM = 'Si_Kilogram';
    const TYPE_SI_KILOGRAM_PER_SQUARE_METER = 'Si_KilogramPerSquareMeter';
    const TYPE_SI_LITRE = 'Si_Litre';
    const TYPE_SI_LITRE_PER_HOUR = 'Si_LitrePerHour';
    const TYPE_SI_LUMEN = 'Si_Lumen';
    const TYPE_SI_METER = 'Si_Meter';
    const TYPE_SI_OUNCE = 'Si_Ounce';
    const TYPE_SI_PERCENT = 'Si_Percent';
    const TYPE_SI_PIXEL = 'Si_Pixel';
    const TYPE_SI_ROUNDS_PER_MINUTE = 'Si_RoundsPerMinute';
    const TYPE_SI_SECOND = 'Si_Second';
    const TYPE_SI_SQUARE_METER = 'Si_SquareMeter';
    const TYPE_SI_VOLT = 'Si_Volt';
    const TYPE_SI_VOLUME_PERCENT = 'Si_VolumePercent';
    const TYPE_SI_WATT = 'Si_Watt';
    const STATUS_OPENED = 'opened';
    const STATUS_BUYER_CLOSED = 'buyer_closed';
    const STATUS_SELLER_CLOSED = 'seller_closed';
    const STATUS_BOTH_CLOSED = 'both_closed';
    const STATUS_CUSTOMER_SERVICE_CLOSED_FINAL = 'customer_service_closed_final';
    const OPEN_REASON_PRODUCT_NOT_AS_DESCRIBED = 'product_not_as_described';
    const OPEN_REASON_PRODUCT_DEFECT = 'product_defect';
    const OPEN_REASON_PRODUCT_NOT_DELIVERED = 'product_not_delivered';
    const OPEN_REASON_PRODUCT_RETURN = 'product_return';
    const OPEN_REASON_CONTACT_OTHER = 'contact_other';
    const ROLE_SELLER = 'seller';
    const ROLE_BUYER = 'buyer';
    const ROLE_SYSTEM = 'system';
    const ROLE_CUSTOMER_SERVICE = 'customer_service';
    const REASON_DELIVERY_DAMAGE = 'delivery_damage';
    const REASON_DELIVERY_DELAY = 'delivery_delay';
    const REASON_INCOMPLETE_DELIVERY = 'incomplete_delivery';
    const REASON_INCORRECT_DELIVERY = 'incorrect_delivery';
    const REASON_REFUND_POSTAGE_FEE = 'refund_postage_fee';
    const REASON_OTHER_REFUND = 'other_refund';
    const STATUS_ABORTED = 'ABORTED';
    const STATUS_CHECKED = 'CHECKED';
    const STATUS_CHECKING = 'CHECKING';
    const STATUS_CHECKING_FAILED = 'CHECKING_FAILED';
    const STATUS_DONE = 'DONE';
    const STATUS_DOWNLOADED = 'DOWNLOADED';
    const STATUS_DOWNLOADING = 'DOWNLOADING';
    const STATUS_DOWNLOADING_FAILED = 'DOWNLOADING_FAILED';
    const STATUS_IMPORTED = 'IMPORTED';
    const STATUS_IMPORTING = 'IMPORTING';
    const STATUS_IMPORTING_FAILED = 'IMPORTING_FAILED';
    const STATUS_IMPORTING_STOPPED = 'IMPORTING_STOPPED';
    const STATUS_NEW = 'NEW';
    const STATUS_PREPARED = 'PREPARED';
    const STATUS_PREPARING = 'PREPARING';
    const STATUS_PREPARING_FAILED = 'PREPARING_FAILED';
    const STATUS_PREPROCESSED = 'PREPROCESSED';
    const STATUS_PREPROCESSING = 'PREPROCESSING';
    const STATUS_PREPROCESSING_FAILED = 'PREPROCESSING_FAILED';
    const STATUS_WAITING = 'WAITING';
    const TYPE_DUMP = 'DUMP';
    const TYPE_COMMAND = 'COMMAND';
    const TYPE_PRODUCT_FEED = 'PRODUCT_FEED';
    const TYPE_INVOICE_SELLER = 'invoice_seller';
    const TYPE_CREDIT_SELLER = 'credit_seller';
    const TYPE_INVOICE_BUYER = 'invoice_buyer';
    const TYPE_CREDIT_BUYER = 'credit_buyer';
    const ITEM_NOT_READY_REASON_BLACKLISTED = 'BLACKLISTED';
    const ITEM_NOT_READY_REASON_PORN_FORBIDDEN = 'PORN_FORBIDDEN';
    const ITEM_NOT_READY_REASON_MISSING_ATTRIBUTES = 'MISSING_ATTRIBUTES';
    const ITEM_NOT_READY_REASON_NOT_YET_PROCESSED = 'NOT_YET_PROCESSED';
    const ITEM_NOT_READY_REASON_PROCESSING_FAILED = 'PROCESSING_FAILED';
    const UPDATE_STATUS_PENDING = 'PENDING';
    const UPDATE_STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const UPDATE_STATUS_SUCCESS = 'SUCCESS';
    const UPDATE_STATUS_FAIL = 'FAIL';
    const UPDATE_FAIL_REASON_NO_ITEM = 'NO_ITEM';
    const UPDATE_FAIL_REASON_NOT_ENOUGH_TEXT = 'NOT_ENOUGH_TEXT';
    const UPDATE_FAIL_REASON_NO_CATEGORY = 'NO_CATEGORY';
    const UPDATE_FAIL_REASON_NOT_ENOUGH_DATA = 'NOT_ENOUGH_DATA';
    const UPDATE_FAIL_REASON_ITEM_FAIL = 'ITEM_FAIL';
    const STATE_ACCEPTED = 'ACCEPTED';
    const STATE_DECLINED = 'DECLINED';
    const STATE_TRANSFORMED = 'TRANSFORMED';
    const STATE_REFUSED = 'REFUSED';
    const STATE_MODIFIED = 'MODIFIED';
    const STATE_IGNORED = 'IGNORED';
    const STATE_PENDING = 'PENDING';
    const STATE_MISSING = 'MISSING';
    const STATE_MIN_ONE_MISSING = 'MIN_ONE_MISSING';
    const STATUS_OPEN = 'open';
    const STATUS_NEED_TO_BE_SENT = 'need_to_be_sent';
    const STATUS_SENT = 'sent';
    const STATUS_RECEIVED = 'received';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_SENT_AND_AUTOPAID = 'sent_and_autopaid';
    const STATUS_RETURNED = 'returned';
    const STATUS_RETURNED_PAID = 'returned_paid';
    const UNIT_CONDITION_100 = 100;
    const UNIT_CONDITION_200 = 200;
    const UNIT_CONDITION_300 = 300;
    const UNIT_CONDITION_400 = 400;
    const UNIT_CONDITION_500 = 500;
    const UNIT_CONDITION_900 = 900;
    const UNIT_CONDITION_NEW = 'new';
    const UNIT_CONDITION_USED_AS_NEW = 'used - as new';
    const UNIT_CONDITION_USED_VERY_GOOD = 'used - very good';
    const UNIT_CONDITION_USED_GOOD = 'used - good';
    const UNIT_CONDITION_USED_ACCEPTABLE = 'used - acceptable';
    const UNIT_CONDITION_DOWNLOAD = 'download';
    const DELIVERY_TIME_A = 'a';
    const DELIVERY_TIME_B = 'b';
    const DELIVERY_TIME_C = 'c';
    const DELIVERY_TIME_D = 'd';
    const DELIVERY_TIME_E = 'e';
    const DELIVERY_TIME_F = 'f';
    const DELIVERY_TIME_G = 'g';
    const DELIVERY_TIME_H = 'h';
    const DELIVERY_TIME_I = 'i';
    const CANCEL_REASON_GENERAL_ADJUSTMENT = 'GeneralAdjustment';
    const CANCEL_REASON_BUYER_CANCELLED = 'BuyerCancelled';
    const CANCEL_REASON_CUSTOMER_EXCHANGE = 'CustomerExchange';
    const CANCEL_REASON_CUSTOMER_RETURN = 'CustomerReturn';
    const CANCEL_REASON_SHIPPING_ADDRESS_UNDELIVERABLE = 'ShippingAddressUndeliverable';
    const CANCEL_REASON_WRONG_CATALOG_DATA = 'WrongCatalogData';
    const CANCEL_REASON_MERCHANDISE_NOT_RECEIVED = 'MerchandiseNotReceived';
    const CANCEL_REASON_NO_INVENTORY = 'NoInventory';
    const CANCEL_REASON_WRONG_PRICE = 'WrongPrice';
    const CANCEL_REASON_UNDELIVERABLE_REGION = 'UndeliverableRegion';
    const CANCEL_REASON_DELAYED_INVENTORY = 'DelayedInventory';
    const CANCEL_REASON_NO_REACTION_BUYER = 'NoReactionBuyer';
    const REASON_GENERAL_ADJUSTMENT = 'GeneralAdjustment';
    const REASON_BUYER_CANCELLED = 'BuyerCancelled';
    const REASON_CUSTOMER_EXCHANGE = 'CustomerExchange';
    const REASON_CUSTOMER_RETURN = 'CustomerReturn';
    const REASON_SHIPPING_ADDRESS_UNDELIVERABLE = 'ShippingAddressUndeliverable';
    const REASON_WRONG_CATALOG_DATA = 'WrongCatalogData';
    const REASON_MERCHANDISE_NOT_RECEIVED = 'MerchandiseNotReceived';
    const REASON_NO_INVENTORY = 'NoInventory';
    const REASON_WRONG_PRICE = 'WrongPrice';
    const REASON_UNDELIVERABLE_REGION = 'UndeliverableRegion';
    const REASON_DELAYED_INVENTORY = 'DelayedInventory';
    const REASON_NO_REACTION_BUYER = 'NoReactionBuyer';
    const CARRIER_CODE_OTHER = 'Other';
    const CARRIER_CODE_OTHER_HAULER = 'Other Hauler';
    const CARRIER_CODE_BURSPED = 'Bursped';
    const CARRIER_CODE_CARGOLINE = 'Cargoline';
    const CARRIER_CODE_COMPUTERUNIVERSE = 'Computeruniverse';
    const CARRIER_CODE_DHL = 'DHL';
    const CARRIER_CODE_DHL_2_MH = 'DHL 2 MH';
    const CARRIER_CODE_DHL_EXPRESS = 'DHL Express';
    const CARRIER_CODE_DHL_FREIGHT = 'DHL Freight';
    const CARRIER_CODE_DTL = 'dtl';
    const CARRIER_CODE_DPD = 'DPD';
    const CARRIER_CODE_DEUTSCHE_POST = 'Deutsche Post';
    const CARRIER_CODE_DACHSER = 'Dachser';
    const CARRIER_CODE_MARKTANLIEFERUNG = 'Marktanlieferung';
    const CARRIER_CODE_EMONS = 'Emons';
    const CARRIER_CODE_FEDEX = 'Fedex';
    const CARRIER_CODE_GLS = 'GLS';
    const CARRIER_CODE_GEL = 'GEL';
    const CARRIER_CODE_HERMES = 'Hermes';
    const CARRIER_CODE_HERMES_2_MH = 'Hermes 2 MH';
    const CARRIER_CODE_HELLMANN = 'Hellmann';
    const CARRIER_CODE_IDS_LOGISTIK = 'IDS Logistik';
    const CARRIER_CODE_ILOXX = 'Iloxx';
    const CARRIER_CODE_KUEHNE_NAGEL = 'Kuehne & Nagel';
    const CARRIER_CODE_POST_ITALIANE = 'Post Italiane';
    const CARRIER_CODE_RHENUS = 'Rhenus';
    const CARRIER_CODE_SCHENKER = 'Schenker';
    const CARRIER_CODE_SPEDITION_GUETTLER = 'Spedition Guettler';
    const CARRIER_CODE_TNT = 'TNT';
    const CARRIER_CODE_TRANS_FM = 'Trans FM';
    const CARRIER_CODE_TRANS_O_FLEX = 'trans-o-flex';
    const CARRIER_CODE_UPS = 'UPS';
    const CARRIER_CODE_ZUFALL = 'Zufall';
    const REPORT_STATUS_NEW = 'new';
    const STATUS_PROCESSING = 'processing';
    const STATUS_PROCESSING_FAILED = 'processing_failed';
    const REPORT_STATUS_DONE = 'done';
    const TRACKING_PROVIDER_DHL = 'DHL';
    const STATUS_RETURN_REQUESTED = 'return_requested';
    const STATUS_LABEL_GENERATED = 'label_generated';
    const STATUS_PACKAGE_SENT = 'package_sent';
    const STATUS_PACKAGE_RECEIVED = 'package_received';
    const STATUS_LABEL_DELETED = 'label_deleted';
    const STATUS_NEED_TO_BE_RETURNED = 'need_to_be_returned';
    const STATUS_RETURN_ARRIVED = 'return_arrived';
    const STATUS_RETURN_ACCEPTED = 'return_accepted';
    const STATUS_RETURN_REJECTED = 'return_rejected';
    const STATUS_RETURN_CLOSED = 'return_closed';
    const STATUS_RETURN_IN_REPAIR = 'return_in_repair';
    const REASON_RETURN = 'return';
    const REASON_OTHER = 'other';
    const REASON_NO_REASON = 'no_reason';
    const REASON_DEFECT = 'defect';
    const REASON_WRONG_ARTICLE = 'wrong_article';
    const REASON_WRONG_SIZE = 'wrong_size';
    const REASON_TOO_LATE = 'too_late';
    const REASON_BAD_QUALITY = 'bad_quality';
    const CONDITION_100 = 100;
    const CONDITION_200 = 200;
    const CONDITION_300 = 300;
    const CONDITION_400 = 400;
    const CONDITION_500 = 500;
    const CONDITION_900 = 900;
    const CONDITION_NEW = 'new';
    const CONDITION_USED_AS_NEW = 'used - as new';
    const CONDITION_USED_VERY_GOOD = 'used - very good';
    const CONDITION_USED_GOOD = 'used - good';
    const CONDITION_USED_ACCEPTABLE = 'used - acceptable';
    const CONDITION_DOWNLOAD = 'download';
    const LOCATION_AD = 'AD';
    const LOCATION_AE = 'AE';
    const LOCATION_AF = 'AF';
    const LOCATION_AG = 'AG';
    const LOCATION_AI = 'AI';
    const LOCATION_AL = 'AL';
    const LOCATION_AM = 'AM';
    const LOCATION_AN = 'AN';
    const LOCATION_AO = 'AO';
    const LOCATION_AQ = 'AQ';
    const LOCATION_AR = 'AR';
    const LOCATION_AS = 'AS';
    const LOCATION_AT = 'AT';
    const LOCATION_AU = 'AU';
    const LOCATION_AW = 'AW';
    const LOCATION_AX = 'AX';
    const LOCATION_AZ = 'AZ';
    const LOCATION_BA = 'BA';
    const LOCATION_BB = 'BB';
    const LOCATION_BD = 'BD';
    const LOCATION_BE = 'BE';
    const LOCATION_BF = 'BF';
    const LOCATION_BG = 'BG';
    const LOCATION_BH = 'BH';
    const LOCATION_BI = 'BI';
    const LOCATION_BJ = 'BJ';
    const LOCATION_BM = 'BM';
    const LOCATION_BN = 'BN';
    const LOCATION_BO = 'BO';
    const LOCATION_BQ = 'BQ';
    const LOCATION_BR = 'BR';
    const LOCATION_BS = 'BS';
    const LOCATION_BT = 'BT';
    const LOCATION_BV = 'BV';
    const LOCATION_BW = 'BW';
    const LOCATION_BY = 'BY';
    const LOCATION_BZ = 'BZ';
    const LOCATION_CA = 'CA';
    const LOCATION_CC = 'CC';
    const LOCATION_CD = 'CD';
    const LOCATION_CF = 'CF';
    const LOCATION_CG = 'CG';
    const LOCATION_CH = 'CH';
    const LOCATION_CI = 'CI';
    const LOCATION_CK = 'CK';
    const LOCATION_CL = 'CL';
    const LOCATION_CM = 'CM';
    const LOCATION_CN = 'CN';
    const LOCATION_CO = 'CO';
    const LOCATION_CR = 'CR';
    const LOCATION_CU = 'CU';
    const LOCATION_CV = 'CV';
    const LOCATION_CW = 'CW';
    const LOCATION_CX = 'CX';
    const LOCATION_CY = 'CY';
    const LOCATION_CZ = 'CZ';
    const LOCATION_DE = 'DE';
    const LOCATION_DJ = 'DJ';
    const LOCATION_DK = 'DK';
    const LOCATION_DM = 'DM';
    const LOCATION_DO = 'DO';
    const LOCATION_DZ = 'DZ';
    const LOCATION_EC = 'EC';
    const LOCATION_EE = 'EE';
    const LOCATION_EG = 'EG';
    const LOCATION_EH = 'EH';
    const LOCATION_ER = 'ER';
    const LOCATION_ES = 'ES';
    const LOCATION_ET = 'ET';
    const LOCATION_FI = 'FI';
    const LOCATION_FJ = 'FJ';
    const LOCATION_FK = 'FK';
    const LOCATION_FM = 'FM';
    const LOCATION_FO = 'FO';
    const LOCATION_FR = 'FR';
    const LOCATION_GA = 'GA';
    const LOCATION_GB = 'GB';
    const LOCATION_GD = 'GD';
    const LOCATION_GE = 'GE';
    const LOCATION_GF = 'GF';
    const LOCATION_GG = 'GG';
    const LOCATION_GH = 'GH';
    const LOCATION_GI = 'GI';
    const LOCATION_GL = 'GL';
    const LOCATION_GM = 'GM';
    const LOCATION_GN = 'GN';
    const LOCATION_GP = 'GP';
    const LOCATION_GQ = 'GQ';
    const LOCATION_GR = 'GR';
    const LOCATION_GS = 'GS';
    const LOCATION_GT = 'GT';
    const LOCATION_GU = 'GU';
    const LOCATION_GW = 'GW';
    const LOCATION_GY = 'GY';
    const LOCATION_HK = 'HK';
    const LOCATION_HM = 'HM';
    const LOCATION_HN = 'HN';
    const LOCATION_HR = 'HR';
    const LOCATION_HT = 'HT';
    const LOCATION_HU = 'HU';
    const LOCATION_ID = 'ID';
    const LOCATION_IE = 'IE';
    const LOCATION_IL = 'IL';
    const LOCATION_IM = 'IM';
    const LOCATION_IN = 'IN';
    const LOCATION_IO = 'IO';
    const LOCATION_IQ = 'IQ';
    const LOCATION_IR = 'IR';
    const LOCATION_IS = 'IS';
    const LOCATION_IT = 'IT';
    const LOCATION_JE = 'JE';
    const LOCATION_JM = 'JM';
    const LOCATION_JO = 'JO';
    const LOCATION_JP = 'JP';
    const LOCATION_KE = 'KE';
    const LOCATION_KG = 'KG';
    const LOCATION_KH = 'KH';
    const LOCATION_KI = 'KI';
    const LOCATION_KM = 'KM';
    const LOCATION_KN = 'KN';
    const LOCATION_KP = 'KP';
    const LOCATION_KR = 'KR';
    const LOCATION_KW = 'KW';
    const LOCATION_KY = 'KY';
    const LOCATION_KZ = 'KZ';
    const LOCATION_LA = 'LA';
    const LOCATION_LB = 'LB';
    const LOCATION_LC = 'LC';
    const LOCATION_LI = 'LI';
    const LOCATION_LK = 'LK';
    const LOCATION_LR = 'LR';
    const LOCATION_LS = 'LS';
    const LOCATION_LT = 'LT';
    const LOCATION_LU = 'LU';
    const LOCATION_LV = 'LV';
    const LOCATION_LY = 'LY';
    const LOCATION_MA = 'MA';
    const LOCATION_MC = 'MC';
    const LOCATION_MD = 'MD';
    const LOCATION_ME = 'ME';
    const LOCATION_MF = 'MF';
    const LOCATION_MG = 'MG';
    const LOCATION_MH = 'MH';
    const LOCATION_MK = 'MK';
    const LOCATION_ML = 'ML';
    const LOCATION_MM = 'MM';
    const LOCATION_MN = 'MN';
    const LOCATION_MO = 'MO';
    const LOCATION_MP = 'MP';
    const LOCATION_MQ = 'MQ';
    const LOCATION_MR = 'MR';
    const LOCATION_MS = 'MS';
    const LOCATION_MT = 'MT';
    const LOCATION_MU = 'MU';
    const LOCATION_MV = 'MV';
    const LOCATION_MW = 'MW';
    const LOCATION_MX = 'MX';
    const LOCATION_MY = 'MY';
    const LOCATION_MZ = 'MZ';
    const LOCATION_NA = 'NA';
    const LOCATION_NC = 'NC';
    const LOCATION_NE = 'NE';
    const LOCATION_NF = 'NF';
    const LOCATION_NG = 'NG';
    const LOCATION_NI = 'NI';
    const LOCATION_NL = 'NL';
    const LOCATION_NO = 'NO';
    const LOCATION_NP = 'NP';
    const LOCATION_NR = 'NR';
    const LOCATION_NU = 'NU';
    const LOCATION_NZ = 'NZ';
    const LOCATION_OM = 'OM';
    const LOCATION_PA = 'PA';
    const LOCATION_PE = 'PE';
    const LOCATION_PF = 'PF';
    const LOCATION_PG = 'PG';
    const LOCATION_PH = 'PH';
    const LOCATION_PK = 'PK';
    const LOCATION_PL = 'PL';
    const LOCATION_PM = 'PM';
    const LOCATION_PN = 'PN';
    const LOCATION_PR = 'PR';
    const LOCATION_PS = 'PS';
    const LOCATION_PT = 'PT';
    const LOCATION_PW = 'PW';
    const LOCATION_PY = 'PY';
    const LOCATION_QA = 'QA';
    const LOCATION_RE = 'RE';
    const LOCATION_RO = 'RO';
    const LOCATION_RS = 'RS';
    const LOCATION_RU = 'RU';
    const LOCATION_RW = 'RW';
    const LOCATION_SA = 'SA';
    const LOCATION_SB = 'SB';
    const LOCATION_SC = 'SC';
    const LOCATION_SD = 'SD';
    const LOCATION_SE = 'SE';
    const LOCATION_SG = 'SG';
    const LOCATION_SH = 'SH';
    const LOCATION_SI = 'SI';
    const LOCATION_SJ = 'SJ';
    const LOCATION_SK = 'SK';
    const LOCATION_SL = 'SL';
    const LOCATION_SM = 'SM';
    const LOCATION_SN = 'SN';
    const LOCATION_SO = 'SO';
    const LOCATION_SR = 'SR';
    const LOCATION_SS = 'SS';
    const LOCATION_ST = 'ST';
    const LOCATION_SU = 'SU';
    const LOCATION_SV = 'SV';
    const LOCATION_SY = 'SY';
    const LOCATION_SZ = 'SZ';
    const LOCATION_TC = 'TC';
    const LOCATION_TD = 'TD';
    const LOCATION_TF = 'TF';
    const LOCATION_TG = 'TG';
    const LOCATION_TH = 'TH';
    const LOCATION_TJ = 'TJ';
    const LOCATION_TK = 'TK';
    const LOCATION_TL = 'TL';
    const LOCATION_TM = 'TM';
    const LOCATION_TN = 'TN';
    const LOCATION_TO = 'TO';
    const LOCATION_TR = 'TR';
    const LOCATION_TT = 'TT';
    const LOCATION_TV = 'TV';
    const LOCATION_TW = 'TW';
    const LOCATION_TZ = 'TZ';
    const LOCATION_UA = 'UA';
    const LOCATION_UG = 'UG';
    const LOCATION_UK = 'UK';
    const LOCATION_UM = 'UM';
    const LOCATION_US = 'US';
    const LOCATION_UY = 'UY';
    const LOCATION_UZ = 'UZ';
    const LOCATION_VA = 'VA';
    const LOCATION_VC = 'VC';
    const LOCATION_VE = 'VE';
    const LOCATION_VG = 'VG';
    const LOCATION_VI = 'VI';
    const LOCATION_VN = 'VN';
    const LOCATION_VU = 'VU';
    const LOCATION_WF = 'WF';
    const LOCATION_WS = 'WS';
    const LOCATION_YE = 'YE';
    const LOCATION_YT = 'YT';
    const LOCATION_ZA = 'ZA';
    const LOCATION_ZM = 'ZM';
    const LOCATION_ZW = 'ZW';
    const EVENT_NAME_ORDER_NEW = 'order_new';
    const EVENT_NAME_ORDER_UNIT_NEW = 'order_unit_new';
    const EVENT_NAME_ORDER_UNIT_STATUS_CHANGED = 'order_unit_status_changed';
    const EVENT_NAME_ITEM_CHANGED = 'item_changed';
    const EVENT_NAME_CATEGORY_CHANGED = 'category_changed';
    const EVENT_NAME_RETURN_NEW = 'return_new';
    const EVENT_NAME_RETURN_STATUS_CHANGED = 'return_status_changed';
    const EVENT_NAME_RETURN_UNIT_STATUS_CHANGED = 'return_unit_status_changed';
    const COUNTRY_AD = 'AD';
    const COUNTRY_AE = 'AE';
    const COUNTRY_AF = 'AF';
    const COUNTRY_AG = 'AG';
    const COUNTRY_AI = 'AI';
    const COUNTRY_AL = 'AL';
    const COUNTRY_AM = 'AM';
    const COUNTRY_AN = 'AN';
    const COUNTRY_AO = 'AO';
    const COUNTRY_AQ = 'AQ';
    const COUNTRY_AR = 'AR';
    const COUNTRY_AS = 'AS';
    const COUNTRY_AT = 'AT';
    const COUNTRY_AU = 'AU';
    const COUNTRY_AW = 'AW';
    const COUNTRY_AX = 'AX';
    const COUNTRY_AZ = 'AZ';
    const COUNTRY_BA = 'BA';
    const COUNTRY_BB = 'BB';
    const COUNTRY_BD = 'BD';
    const COUNTRY_BE = 'BE';
    const COUNTRY_BF = 'BF';
    const COUNTRY_BG = 'BG';
    const COUNTRY_BH = 'BH';
    const COUNTRY_BI = 'BI';
    const COUNTRY_BJ = 'BJ';
    const COUNTRY_BM = 'BM';
    const COUNTRY_BN = 'BN';
    const COUNTRY_BO = 'BO';
    const COUNTRY_BQ = 'BQ';
    const COUNTRY_BR = 'BR';
    const COUNTRY_BS = 'BS';
    const COUNTRY_BT = 'BT';
    const COUNTRY_BV = 'BV';
    const COUNTRY_BW = 'BW';
    const COUNTRY_BY = 'BY';
    const COUNTRY_BZ = 'BZ';
    const COUNTRY_CA = 'CA';
    const COUNTRY_CC = 'CC';
    const COUNTRY_CD = 'CD';
    const COUNTRY_CF = 'CF';
    const COUNTRY_CG = 'CG';
    const COUNTRY_CH = 'CH';
    const COUNTRY_CI = 'CI';
    const COUNTRY_CK = 'CK';
    const COUNTRY_CL = 'CL';
    const COUNTRY_CM = 'CM';
    const COUNTRY_CN = 'CN';
    const COUNTRY_CO = 'CO';
    const COUNTRY_CR = 'CR';
    const COUNTRY_CU = 'CU';
    const COUNTRY_CV = 'CV';
    const COUNTRY_CW = 'CW';
    const COUNTRY_CX = 'CX';
    const COUNTRY_CY = 'CY';
    const COUNTRY_CZ = 'CZ';
    const COUNTRY_DE = 'DE';
    const COUNTRY_DJ = 'DJ';
    const COUNTRY_DK = 'DK';
    const COUNTRY_DM = 'DM';
    const COUNTRY_DO = 'DO';
    const COUNTRY_DZ = 'DZ';
    const COUNTRY_EC = 'EC';
    const COUNTRY_EE = 'EE';
    const COUNTRY_EG = 'EG';
    const COUNTRY_EH = 'EH';
    const COUNTRY_ER = 'ER';
    const COUNTRY_ES = 'ES';
    const COUNTRY_ET = 'ET';
    const COUNTRY_FI = 'FI';
    const COUNTRY_FJ = 'FJ';
    const COUNTRY_FK = 'FK';
    const COUNTRY_FM = 'FM';
    const COUNTRY_FO = 'FO';
    const COUNTRY_FR = 'FR';
    const COUNTRY_GA = 'GA';
    const COUNTRY_GB = 'GB';
    const COUNTRY_GD = 'GD';
    const COUNTRY_GE = 'GE';
    const COUNTRY_GF = 'GF';
    const COUNTRY_GG = 'GG';
    const COUNTRY_GH = 'GH';
    const COUNTRY_GI = 'GI';
    const COUNTRY_GL = 'GL';
    const COUNTRY_GM = 'GM';
    const COUNTRY_GN = 'GN';
    const COUNTRY_GP = 'GP';
    const COUNTRY_GQ = 'GQ';
    const COUNTRY_GR = 'GR';
    const COUNTRY_GS = 'GS';
    const COUNTRY_GT = 'GT';
    const COUNTRY_GU = 'GU';
    const COUNTRY_GW = 'GW';
    const COUNTRY_GY = 'GY';
    const COUNTRY_HK = 'HK';
    const COUNTRY_HM = 'HM';
    const COUNTRY_HN = 'HN';
    const COUNTRY_HR = 'HR';
    const COUNTRY_HT = 'HT';
    const COUNTRY_HU = 'HU';
    const COUNTRY_ID = 'ID';
    const COUNTRY_IE = 'IE';
    const COUNTRY_IL = 'IL';
    const COUNTRY_IM = 'IM';
    const COUNTRY_IN = 'IN';
    const COUNTRY_IO = 'IO';
    const COUNTRY_IQ = 'IQ';
    const COUNTRY_IR = 'IR';
    const COUNTRY_IS = 'IS';
    const COUNTRY_IT = 'IT';
    const COUNTRY_JE = 'JE';
    const COUNTRY_JM = 'JM';
    const COUNTRY_JO = 'JO';
    const COUNTRY_JP = 'JP';
    const COUNTRY_KE = 'KE';
    const COUNTRY_KG = 'KG';
    const COUNTRY_KH = 'KH';
    const COUNTRY_KI = 'KI';
    const COUNTRY_KM = 'KM';
    const COUNTRY_KN = 'KN';
    const COUNTRY_KP = 'KP';
    const COUNTRY_KR = 'KR';
    const COUNTRY_KW = 'KW';
    const COUNTRY_KY = 'KY';
    const COUNTRY_KZ = 'KZ';
    const COUNTRY_LA = 'LA';
    const COUNTRY_LB = 'LB';
    const COUNTRY_LC = 'LC';
    const COUNTRY_LI = 'LI';
    const COUNTRY_LK = 'LK';
    const COUNTRY_LR = 'LR';
    const COUNTRY_LS = 'LS';
    const COUNTRY_LT = 'LT';
    const COUNTRY_LU = 'LU';
    const COUNTRY_LV = 'LV';
    const COUNTRY_LY = 'LY';
    const COUNTRY_MA = 'MA';
    const COUNTRY_MC = 'MC';
    const COUNTRY_MD = 'MD';
    const COUNTRY_ME = 'ME';
    const COUNTRY_MF = 'MF';
    const COUNTRY_MG = 'MG';
    const COUNTRY_MH = 'MH';
    const COUNTRY_MK = 'MK';
    const COUNTRY_ML = 'ML';
    const COUNTRY_MM = 'MM';
    const COUNTRY_MN = 'MN';
    const COUNTRY_MO = 'MO';
    const COUNTRY_MP = 'MP';
    const COUNTRY_MQ = 'MQ';
    const COUNTRY_MR = 'MR';
    const COUNTRY_MS = 'MS';
    const COUNTRY_MT = 'MT';
    const COUNTRY_MU = 'MU';
    const COUNTRY_MV = 'MV';
    const COUNTRY_MW = 'MW';
    const COUNTRY_MX = 'MX';
    const COUNTRY_MY = 'MY';
    const COUNTRY_MZ = 'MZ';
    const COUNTRY_NA = 'NA';
    const COUNTRY_NC = 'NC';
    const COUNTRY_NE = 'NE';
    const COUNTRY_NF = 'NF';
    const COUNTRY_NG = 'NG';
    const COUNTRY_NI = 'NI';
    const COUNTRY_NL = 'NL';
    const COUNTRY_NO = 'NO';
    const COUNTRY_NP = 'NP';
    const COUNTRY_NR = 'NR';
    const COUNTRY_NU = 'NU';
    const COUNTRY_NZ = 'NZ';
    const COUNTRY_OM = 'OM';
    const COUNTRY_PA = 'PA';
    const COUNTRY_PE = 'PE';
    const COUNTRY_PF = 'PF';
    const COUNTRY_PG = 'PG';
    const COUNTRY_PH = 'PH';
    const COUNTRY_PK = 'PK';
    const COUNTRY_PL = 'PL';
    const COUNTRY_PM = 'PM';
    const COUNTRY_PN = 'PN';
    const COUNTRY_PR = 'PR';
    const COUNTRY_PS = 'PS';
    const COUNTRY_PT = 'PT';
    const COUNTRY_PW = 'PW';
    const COUNTRY_PY = 'PY';
    const COUNTRY_QA = 'QA';
    const COUNTRY_RE = 'RE';
    const COUNTRY_RO = 'RO';
    const COUNTRY_RS = 'RS';
    const COUNTRY_RU = 'RU';
    const COUNTRY_RW = 'RW';
    const COUNTRY_SA = 'SA';
    const COUNTRY_SB = 'SB';
    const COUNTRY_SC = 'SC';
    const COUNTRY_SD = 'SD';
    const COUNTRY_SE = 'SE';
    const COUNTRY_SG = 'SG';
    const COUNTRY_SH = 'SH';
    const COUNTRY_SI = 'SI';
    const COUNTRY_SJ = 'SJ';
    const COUNTRY_SK = 'SK';
    const COUNTRY_SL = 'SL';
    const COUNTRY_SM = 'SM';
    const COUNTRY_SN = 'SN';
    const COUNTRY_SO = 'SO';
    const COUNTRY_SR = 'SR';
    const COUNTRY_SS = 'SS';
    const COUNTRY_ST = 'ST';
    const COUNTRY_SU = 'SU';
    const COUNTRY_SV = 'SV';
    const COUNTRY_SY = 'SY';
    const COUNTRY_SZ = 'SZ';
    const COUNTRY_TC = 'TC';
    const COUNTRY_TD = 'TD';
    const COUNTRY_TF = 'TF';
    const COUNTRY_TG = 'TG';
    const COUNTRY_TH = 'TH';
    const COUNTRY_TJ = 'TJ';
    const COUNTRY_TK = 'TK';
    const COUNTRY_TL = 'TL';
    const COUNTRY_TM = 'TM';
    const COUNTRY_TN = 'TN';
    const COUNTRY_TO = 'TO';
    const COUNTRY_TR = 'TR';
    const COUNTRY_TT = 'TT';
    const COUNTRY_TV = 'TV';
    const COUNTRY_TW = 'TW';
    const COUNTRY_TZ = 'TZ';
    const COUNTRY_UA = 'UA';
    const COUNTRY_UG = 'UG';
    const COUNTRY_UK = 'UK';
    const COUNTRY_UM = 'UM';
    const COUNTRY_US = 'US';
    const COUNTRY_UY = 'UY';
    const COUNTRY_UZ = 'UZ';
    const COUNTRY_VA = 'VA';
    const COUNTRY_VC = 'VC';
    const COUNTRY_VE = 'VE';
    const COUNTRY_VG = 'VG';
    const COUNTRY_VI = 'VI';
    const COUNTRY_VN = 'VN';
    const COUNTRY_VU = 'VU';
    const COUNTRY_WF = 'WF';
    const COUNTRY_WS = 'WS';
    const COUNTRY_YE = 'YE';
    const COUNTRY_YT = 'YT';
    const COUNTRY_ZA = 'ZA';
    const COUNTRY_ZM = 'ZM';
    const COUNTRY_ZW = 'ZW';
}
